<?php


use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class TestShop extends TestCase
{
    protected $hualala;

    protected $groupID;

    protected $shopID;

    protected function setUp(): void
    {
        parent::setUp();

        $config = require 'testConfig.php';
        $appKey = $config['app_key'];
        $secret = $config['secret'];
        $this->groupID = $config['groupID'];
        $this->shopID = $config['shopID'];
        $this->hualala = new \Cblink\HyperfHualala\HualalaApp([
            'appKey' => $appKey,
            'appSecret' => $secret,
            'shopID' => $this->shopID,
            'groupID' => $this->groupID,
            'traceID' => Uuid::uuid1()->toString(),
        ]);
    }

    /**
     * 门店列表
     */
    public function testShopList()
    {
        $result = $this->hualala->shop->getAllShop(['groupID' => $this->groupID]);

        $this->assertTrue($result['code'] === '000');
    }

    public function testShopFoodList()
    {
        $result = $this->hualala->shop->getOpenFood(['groupID' => $this->groupID, 'shopID' => $this->shopID]);

        $this->assertTrue($result['code'] === '000');
    }
}
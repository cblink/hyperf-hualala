<?php


use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class TestFood extends TestCase
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

    public function testGroupGoods()
    {
        $result = $this->hualala->food->groupGoods(['groupID' => 324716, 'pageNo' => 1, 'pageSize' => 10]);
        $this->assertTrue($result['code'] === '000');
    }
}
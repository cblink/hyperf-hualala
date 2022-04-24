<?php


use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class TestOrder extends TestCase
{
    protected $hualala;

    protected function setUp(): void
    {
        parent::setUp();

        $config = require 'testConfig.php';
        $appKey = $config['app_key'];
        $secret = $config['secret'];
        $groupID = $config['groupID'];
        $shopID = $config['shopID'];
        $this->hualala = new \Cblink\HyperfHualala\HualalaApp([
            'appKey' => $appKey,
            'appSecret' => $secret,
            'shopID' => $shopID,
            'groupID' => $groupID,
        ]);
    }

    public function testOrder()
    {
        $data = [
        ];
        $result = $this->hualala->order->submitOrderNew($data);
        $this->assertTrue($result['code'] === '000');
    }

    public function testGetShopBillDetail()
    {
        $data = [
            'groupID' => $this->hualala->config['groupID'],
            'shopID' => $this->hualala->config['shopID'],
            'reportDate' => 20211220, //\Carbon\Carbon::now()->toDateString(),
            'pageNo' => 1,
            'pageSize' => 10,
        ];

        $this->hualala->order->getShopBillDetail($data);
    }
}
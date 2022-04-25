<?php

/*
 * This file is part of the cblink/dispatch-meituan.
 *
 * (c) jinjun <757258777@qq.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Cblink\HyperfHualala\Member;

use Cblink\HyperfHualala\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 新增会员卡.
     *
     * @see https://www-openapi.hualala.com/card/openNewCard
     * @param array $payload
     * @return array
     */
    public function openNewCard(array $payload = [])
    {
        return $this->sendRequest('post', 'card/openNewCard', $payload);
    }

    /**
     * 取可用卡类型列表
     *
     * @see https://www-openapi.hualala.com/card/queryCardTypeParamsList
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function queryCardTypeParamsList(array $payload = [])
    {
        return $this->sendRequest('post', 'card/queryCardTypeParamsList', $payload);
    }

    /**
     * 查询会员用户信息
     *
     * @see https://www-openapi.hualala.com/card/queryCustomerInfo
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function queryCustomerInfo(array $payload = [])
    {
        return $this->sendRequest('post', 'card/queryCustomerInfo', $payload);
    }

    /**
     * 查询会员卡信息
     *
     * @see https://www-openapi.hualala.com/card/queryCardInfo
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function queryCardInfo(array $payload = [])
    {
        return $this->sendRequest('post', 'card/queryCardInfo', $payload);
    }

    /**
     * 修改会员信息.
     *
     * @see https://www-openapi.hualala.com/card/updateCustomerInfo
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function updateCustomerInfo(array $payload = [])
    {
        return $this->sendRequest('post', 'card/updateCustomerInfo', $payload);
    }

    /**
     * 会员卡状态修改.
     *
     * @see https://www-openapi.hualala.com/card/updateCardStatus
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function updateCardStatus(array $payload = [])
    {
        return $this->sendRequest('post', 'card/updateCardStatus', $payload);
    }

    /**
     * 查询会员卡储值结果.
     *
     * @see https://www-openapi.hualala.com/card/checkRechargeStatus
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function checkRechargeStatus(array $payload = [])
    {
        return $this->sendRequest('post', 'card/checkRechargeStatus', $payload);
    }

    /**
     * 会员卡储值.
     *
     * @see https://www-openapi.hualala.com/card/saveMoney
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function saveMoney(array $payload = [])
    {
        return $this->sendRequest('post', 'card/saveMoney', $payload);
    }

    /**
     * 会员卡消费
     *
     * @see https://www-openapi.hualala.com/card/consume
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function consume(array $payload = [])
    {
        return $this->sendRequest('post', 'card/consume', $payload);
    }

    /**
     * 会员卡消费撤销
     *
     * @see https://www-openapi.hualala.com/card/cancelConsume
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function cancelConsume(array $payload = [])
    {
        return $this->sendRequest('post', 'card/cancelConsume', $payload);
    }

    /**
     * 获取会员交易列表
     *
     * @see https://www-openapi.hualala.com/card/queryCardTransInfo
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function queryCardTransInfo(array $payload = [])
    {
        return $this->sendRequest('post', 'card/queryCardTransInfo', $payload);
    }

    /**
     * 会员卡交易明细查询
     *
     * @see https://www-openapi.hualala.com/card/getCardTransDetail
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function getCardTransDetail(array $payload = [])
    {
        return $this->sendRequest('post', 'card/getCardTransDetail', $payload);
    }

    /**
     * 获取会员卡下优惠券
     *
     * @see https://www-openapi.hualala.com/card/getCardGiftList
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function getCardGiftList(array $payload = [])
    {
        return $this->sendRequest('post', 'card/getCardGiftList', $payload);
    }
}

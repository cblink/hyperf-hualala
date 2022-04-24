<?php

/*
 * This file is part of the cblink/dispatch-meituan.
 *
 * (c) jinjun <757258777@qq.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Cblink\HyperfHualala\Food;

use Cblink\HyperfHualala\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 集团菜品列表
     *
     * @param array $payload
     * @return mixed
     * @throws \Cblink\HyperfHualala\Kernel\Exception\HualalaException
     */
    public function groupGoods(array $payload = [])
    {
        return $this->sendRequest('post', 'doc/queryGroupFoodSubInfoList', $payload);
    }
}

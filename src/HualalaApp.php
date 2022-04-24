<?php


namespace Cblink\HyperfHualala;


use Cblink\HyperfHualala\Kernel\ServiceContainer;

/**
 * @property Order\Client $order
 * @property Shop\Client $shop
 * Class HualalaOpen
 * @package Cblink\HualalaSdk
 */
class HualalaApp extends ServiceContainer
{
    /**
     * @var string
     */
    protected $base_url = 'https://www-openapi.hualala.com/';

    /**
     * {@inheritdoc}
     */
    protected function getCustomProviders(): array
    {
        return [
            Order\ServiceProvider::class,
            Shop\ServiceProvider::class,
        ];
    }
}
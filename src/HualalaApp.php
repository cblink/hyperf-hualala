<?php


namespace Cblink\HyperfHualala;


use Cblink\HyperfHualala\Kernel\ServiceContainer;

/**
 * @property Order\Client $order
 * @property Shop\Client $shop
 * @property Food\Client $food
 * @property Member\Client $member
 * Class HualalaApp
 * @package Cblink\HyperfHualala
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
            Food\ServiceProvider::class,
            Member\ServiceProvider::class,
        ];
    }
}
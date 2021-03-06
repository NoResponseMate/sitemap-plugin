<?php

declare(strict_types=1);

namespace Tests\SitemapPlugin\Controller;

trait RelativeClientTrait
{
    /**
     * @beforeClass
     */
    public static function createSharedKernel()
    {
        static::$sharedKernel = static::createKernel(['debug' => false, 'environment' => 'test_relative']);
        static::$sharedKernel->boot();
    }

    /**
     * @before
     */
    public function setUpClient()
    {
        $this->client = static::createClient(['environment' => 'test_relative'], []);
    }
}

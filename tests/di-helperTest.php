<?php

namespace elson2010\di-helper\Tests;

use elson2010\di-helper\Facades\di-helper;
use elson2010\di-helper\ServiceProvider;
use Orchestra\Testbench\TestCase;

class di-helperTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'di-helper' => di-helper::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}

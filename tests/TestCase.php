<?php

namespace Kodnificent\Crudler\Tests;

use Kodnificent\Crudler\CrudlerServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
    public function setUp(): void
    {
        //
    }

    protected function getPackageProviders($app): array
    {
        return [
            CrudlerServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        //
    }
}

<?php

namespace Sawirricardo\ArtisanDevjobs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Sawirricardo\ArtisanDevjobs\ArtisanDevjobsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            ArtisanDevjobsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_artisan-devjobs_table.php.stub';
        $migration->up();
        */
    }
}

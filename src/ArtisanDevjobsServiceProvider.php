<?php

namespace Sawirricardo\ArtisanDevjobs;

use Sawirricardo\ArtisanDevjobs\Commands\LarajobsCommand;
use Sawirricardo\ArtisanDevjobs\Commands\VuejobsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ArtisanDevjobsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('artisan-devjobs')
            ->hasViews()
            ->hasCommand(LarajobsCommand::class)
            ->hasCommand(VuejobsCommand::class);
    }
}

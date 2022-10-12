<?php

namespace Sawirricardo\ArtisanDevjobs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sawirricardo\ArtisanDevjobs\Commands\ArtisanDevjobsCommand;
use Sawirricardo\ArtisanDevjobs\Commands\LarajobsCommand;
use Sawirricardo\ArtisanDevjobs\Commands\VuejobsCommand;

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

<?php

namespace CornelVerster\LaravelPaystack;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CornelVerster\LaravelPaystack\Commands\LaravelPaystackCommand;

class LaravelPaystackServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-paystack')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_paystack_table')
            ->hasCommand(LaravelPaystackCommand::class);
    }
}

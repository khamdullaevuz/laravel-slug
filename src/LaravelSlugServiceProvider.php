<?php

namespace Khamdullaevuz\LaravelSlug;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Khamdullaevuz\LaravelSlug\Commands\LaravelSlugCommand;

class LaravelSlugServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-slug');
    }
}

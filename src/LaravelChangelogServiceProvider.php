<?php

namespace OneAWebmarketing\LaravelChangelog;

use Illuminate\Support\ServiceProvider;

class LaravelChangelogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // No assets to publish for now.
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        // Automatically include helper functions.
        require_once __DIR__ . '/Helpers/changelog.php';
    }
}

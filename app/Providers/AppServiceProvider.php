<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Whitecube\LaravelCookieConsent\Cookie;
use Whitecube\LaravelCookieConsent\Facades\Cookies;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('path.public', function () {
            return realpath(base_path().'/../public_html');
        });
    }

    public function boot(): void
    {
        Cookies::analytics()->google(env('GOOGLE_ANALYTICS_ID', ''));
    }
}

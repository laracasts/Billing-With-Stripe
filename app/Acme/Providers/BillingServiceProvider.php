<?php namespace Acme\Providers;

use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('Acme\Billing\BillingInterface', 'Acme\Billing\StripeBilling');
    }
}

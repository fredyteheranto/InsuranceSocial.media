<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use net\authorize\api\contract\v1\MerchantAuthenticationType;

use App\Services\PaymentService;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\PaymentService', function ($app) {
            return new PaymentService(new MerchantAuthenticationType());
        });
    }

    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
    public function provides()
    {
       return [PaymentService::class];
    }

}

<?php

namespace App\Providers;

use App\Billing\BankPaymentGateWay;
use App\Billing\CreditPaymentController;
use App\Billing\PaymentGateWayContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGateWayContract::class,function($app){
            if(request()->has('credit')){
                return new CreditPaymentController('usd');
            }
            return new BankPaymentGateWay('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

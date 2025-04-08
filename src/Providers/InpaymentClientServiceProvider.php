<?php

declare(strict_types=1);

namespace IntracsRnd\InpaymentClient\Providers;

use Illuminate\Support\ServiceProvider;

final class InpaymentClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->bind('inpayment.client', 'Illuminate\Http\Client\Factory');
    }

    public function boot(): void
    {
        //
    }
}

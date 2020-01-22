<?php

namespace App\Providers;

use App\Services\MessageService\SendMessageEmail;
use App\Services\MessageService\SendMessageInterface;
use App\Services\MessageService\SendMessageSMS;
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
        $this->app->bind(SendMessageInterface::class, SendMessageEmail::class);
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

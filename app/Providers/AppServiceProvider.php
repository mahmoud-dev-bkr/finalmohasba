<?php

namespace App\Providers;


use App\CompanySetting;
use App\Repositories\Interfaces\InvoicesRepositoryInterface;
use App\Repositories\InvoicesRepository;
use Illuminate\Support\Facades\View;
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
        $this->app->bind(InvoicesRepositoryInterface::class, InvoicesRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}

<?php

namespace App\Providers;

use App\Models\purchase;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PurchasersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('components.menu', function ($view) {
            $totalPurchases = Purchase::sum('quantity');
            $view->with('totalPurchases', $totalPurchases);
        });
    }
}

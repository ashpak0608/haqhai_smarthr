<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // Import the View Facade
use Illuminate\Support\Facades\DB;   // Import the DB Facade

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share the menu data with the sidebar view only
        View::composer('layout.partials.sidebar', function ($view) {
            
            // We fetch the modules (Main Menus like "Masters")
            $menus = DB::table('modules')
                ->where('status', 0)
                ->orderBy('sequence', 'asc')
                ->get()
                ->map(function ($module) {
                    // For each module, we fetch its submodules (Forms like "State")
                    $module->submodules = DB::table('submodules')
                        ->where('module_id', $module->id)
                        ->where('status', 0)
                        ->orderBy('sequence', 'asc')
                        ->get();
                    return $module;
                });

            // This makes the $dynamicMenus variable available in sidebar.blade.php
            $view->with('dynamicMenus', $menus);
        });
    }
}
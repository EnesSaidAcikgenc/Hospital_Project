<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Department;

class ComposerServiceProvider extends ServiceProvider
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
        // Master layout ile ilgili verileri sağlama
        View::composer('projectPanel.layouts.master', function ($view) {
            $departments = Department::with('doctors')->get();
            $view->with('departments', $departments);
        });
    }
}

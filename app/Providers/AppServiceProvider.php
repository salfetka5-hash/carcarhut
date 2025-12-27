<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Migrations\DatabaseMigrationRepository;

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
        // Fix for migration repository: Laravel bug where it passes array instead of string
        // Extend the binding to fix the table name
        $this->app->extend('migration.repository', function ($repository, $app) {
            // If repository was created with array instead of string, recreate it
            $table = config('database.migrations.table', 'migrations');
            return new DatabaseMigrationRepository($app['db'], $table);
        });
        
        // Используем Bootstrap для пагинации
        \Illuminate\Pagination\Paginator::useBootstrap();
    }
}

<?php

namespace Mob\User\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'User');
        Route::middleware('web')->namespace('Mob\User\Http\Controllers')->group(__DIR__ . '/../Routes/user_routes.php');
    }

    public function boot()
    {
        config()->set('panelConfig.menus.users', [
            'url' => route('users.index'),
            'title' => 'کاربران',
            'icon' => 'person',
        ]);
    }
}

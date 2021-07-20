<?php

namespace App\Providers;

use App\Http\Controllers\Constant;
use App\Models\Menu\MenuTop;
use App\Models\Props\PropCountry;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('const', (object)[
            'baseSite' => getenv('BACKEND_URL').'/',
            'storage' => getenv('BACKEND_URL').'/storage/',
            'vThumb' => getenv('BACKEND_URL').'/storage/uploads/v/thumb/',
            'pThumb' => getenv('BACKEND_URL').'/storage/uploads/product/thumb/',
            'vMiddle' => getenv('BACKEND_URL').'/storage/uploads/v/middle/',
            'pMiddle' => getenv('BACKEND_URL').'/storage/uploads/product/middle/',
            'vOriginal' => getenv('BACKEND_URL').'/storage/uploads/v/orig/',
            'pOriginal' => getenv('BACKEND_URL').'/storage/uploads/product/orig/',
            'flagSrc' => getenv('BACKEND_URL').'/storage/props/flags/',
            'foodSrc' => getenv('BACKEND_URL').'/storage/props/food/',
            'cnt' => null,
            'menu' => MenuTop::with('submenu.menuort')->get()
        ]);
    }
}

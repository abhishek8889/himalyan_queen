<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\SiteMeta;
use Illuminate\Support\Facades\View;
use DB;

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
        Paginator::useBootstrap();
        View::composer(['user.*', 'user_layout.*'], function ($view) {
            $siteMeta = DB::table('site_metas')->select('meta_key', 'meta_value')->get();
            $site_info = [];
            foreach($siteMeta as  $singleOb){
                $site_info[$singleOb->meta_key] = $singleOb->meta_value;
            }
            $view->with('site_info', $site_info);
        });
        
    }
}

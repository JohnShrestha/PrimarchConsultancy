<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Session;
use Illuminate\Http\Request;
use View;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $all_view['setting'] = DB::table('settings')->first();
        $all_view['contact_count'] = DB::table('contacts')->count();

        $all_view['common'] = DB::table('commons')->first();

         View::share(compact('all_view'));

    }
}

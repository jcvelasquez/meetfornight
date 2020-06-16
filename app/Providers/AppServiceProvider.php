<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

class AppServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        //Check for 'lang' cookie
        //$cookie = Crypt::decrypt(Cookie::get('lang'), false);

        //Get visitors IP
        //$userIp = Request::ip();

        //Get visitors Geo info based on his IP
        //$geo = GeoIP::getLocation($userIp);


    }

    public function register()
    {
        
       /* $this->app->bind('path.public', function(){
            return '/home/www/meetfornight.com/';
        });*/
        
    }

}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeHelperServiceProvider extends ServiceProvider{

    public function register(){

    }

    public function boot(){
        Blade::directive('headerUpperCase', function ($text){
            return "<?php echo '<h1>' . strtoupper($text) . '</h1>'";
        });
    }

}

<?php

namespace App\Providers;
use App\Notification;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //NEW: Import Schema
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     
        $data['schoolNotifications'] = Notification::where('user_id' , session('school_id'))->where('table' , 'schools')->get() ; 
        $data['studentNotifications'] =  Notification::where('user_id' , session('student_id'))->where('table' , 'students')->get() ; 
        View::share('notifications', $data);
       
        Schema::defaultStringLength(191); //NEW: Increase StringLength
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        // View::share('notifications', $data);
    }
}

<?php
namespace App\Providers;
<<<<<<< HEAD
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Route;
=======

use Laravel\Passport\Passport;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Route;
>>>>>>> palacios-rojas
>>>>>>> dev
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
		Route::middleware(['cors','api'])->group(function(){
			Passport::routes();	
		});
		//
    }
}
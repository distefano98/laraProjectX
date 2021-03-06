<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     * 3 different policies, using Facade Gate
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('isAdmin',function($user){
            return $user->hasRole('admin');
        });
        Gate::define('isStaff',function($user){
            return $user->hasRole('staff');
        });
        Gate::define('isUser',function($user){
            return $user->hasRole('user');
        });
        Gate::define('mostra-sconto',function($user){
            return $user->hasRole(['user','staff','admin']);
        });
    }
}

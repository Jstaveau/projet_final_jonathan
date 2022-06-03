<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('authentification', function(){
            return Auth::user() != null;
        });
        Gate::define('admin', function(){
            return Auth::user()->role_id == 1;
        });
        Gate::define('webmaster', function(){
            return Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::user()->role_id == 3;
        });
        Gate::define('stock', function(){
            return Auth::user()->role_id == 1 || Auth::user()->role_id == 4;
        });
        Gate::define('redac', function($user, $article){
            if (Auth::user()->role_id == 1) {
                return true;
            } else {
                return Auth::user()->role_id == 3 && $article->user->id == $user->id;
            }
        });
    }
}

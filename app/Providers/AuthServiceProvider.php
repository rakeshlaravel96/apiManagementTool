<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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


        Gate::define('super-admin', function (User $user,) {
            return $user->name === 'admin';
        });

        Gate::define('module-create', function (User $user) {
            return $user->role->mcreate == '1';
        });

        Gate::define('module-edit', function (User $user) {
            return $user->role->medit == '1';
        });

        Gate::define('module-delete', function (User $user) {
            return $user->role->mdelete == '1';
        });

        Gate::define('module-view', function (User $user) {

            if($user->role->mviewAll == '1'){
                return $user->role->mviewAll == '1';
            }else{
                return $user->role->mview == '1';
            }
            
        });


        Gate::define('hosting-create', function (User $user) {
            return $user->role->hcreate == '1';
        });

        Gate::define('hosting-edit', function (User $user) {
            return $user->role->hedit == '1';
        });

        Gate::define('hosting-delete', function (User $user) {
            return $user->role->hdelete == '1';
        });

        Gate::define('hosting-view', function (User $user) {

            if($user->role->hviewAll == '1'){
                return $user->role->hviewAll == '1';
            }else{
                return $user->role->hview == '1';
            }
            
        });

        Gate::define('api-create', function (User $user) {
            return $user->role->acreate == '1';
        });

        Gate::define('api-edit', function (User $user) {
            return $user->role->aedit == '1';
        });

        Gate::define('api-delete', function (User $user) {
            return $user->role->adelete == '1';
        });

        Gate::define('api-view', function (User $user) {

            if($user->role->aviewAll == '1'){
                return $user->role->aviewAll == '1';
            }else{
                return $user->role->aview == '1';
            }
            
        });



        
      
    }
}

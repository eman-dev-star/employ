<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Project;
use App\Models\Task;
use App\Models\Details;
use Illuminate\Support\Facades\Gate;
class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        Details::class => DetailsPolicy::class,
        Project::class => 'App\Policies\ProjectPolicy',
        Task::class => TaskPolicy::class,


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
        Gate::define('is_admin', function($user){
            return $user->is_admin == 'true';
        });

        Gate::define('is_user', function($user){
            return $user->is_admin == 'false';
        });

        //
    }
}

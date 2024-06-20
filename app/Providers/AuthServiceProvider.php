<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
 
    protected $policies = [
       ];

    
    public function boot(): void
    {
        Gate::define('operacoes_disciplinas', function(User $user){
            return $user->access_level===1;
           });

           Gate::define('operacoes_series', function(User $user){
            return $user->access_level===1;
           });

           Gate::define('operacoes_setores', function(User $user){
            return $user->access_level===1;
           });

           Gate::define('operacoes_responsaveis', function(User $user){
            return $user->access_level===1;
           });

           Gate::define('consultas', function(User $user){
            return $user->access_level===1;
           });
    }
}

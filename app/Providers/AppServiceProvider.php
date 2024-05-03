<?php

namespace App\Providers;

use App\Http\Implementations\AuthServiceImpl;
use App\Http\Implementations\MemberServiceImpl;
use App\Http\Implementations\MemberDetailServiceImpl;
use App\Http\Services\AuthService;
use App\Http\Services\MemberService;
use App\Http\Services\MemberDetailService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        AuthService::class => AuthServiceImpl::class,
        MemberService::class => MemberServiceImpl::class,
        MemberDetailService::class => MemberDetailServiceImpl::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

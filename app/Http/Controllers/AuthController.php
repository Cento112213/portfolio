<?php
namespace App\Http\Controllers;

use App\Http\Services\AuthService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(public AuthService $authService){
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login(Request $request){
        return $this->authService->login($request);
    }

    public function register(Request $request){
        return $this->authService->register($request);
    }

    public function logout(){
        return $this->authService->logout();
    }

    public function refresh(){
        return $this->authService->refresh();
    }

    public function userProfile(){
        return $this->authService->userProfile();
    }
}

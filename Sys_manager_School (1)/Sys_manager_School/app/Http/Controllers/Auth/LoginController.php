<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

protected $redirectTo = '/';

protected function redirectTo()
{
    switch (auth()->user()->user_type) {
        case 'admin':
            return '/admin';
        case 'student':
            return '/student';
        case 'chefF':
            return '/chefF';
        case 'chefD':
            return '/chefD';
        case 'chefM':
            return '/chefM';
        case 'guest':
            return '/guest';
        default:
            return '/';
    }
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
}

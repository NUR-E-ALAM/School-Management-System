<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        if (Auth::check() && Auth::user()->role->id == 1) {
            $this->redirectTo = route('admin.dashboard');
        } elseif (Auth::check() && Auth::user()->role->id == 2) {
            $this->redirectTo = route('gadmin.dashboard');
        } 
        elseif (Auth::check() && Auth::user()->role->id == 3) {
            $this->redirectTo = route('teacher.dashboard');
        } elseif (Auth::check() && Auth::user()->role->id == 4) {
            $this->redirectTo = route('parent.dashboard');
        } elseif (Auth::check() && Auth::user()->role->id == 5) {
            $this->redirectTo = route('student.dashboard');
        } elseif (Auth::check() && Auth::user()->role->id == 6) {
            $this->redirectTo = route('accountant.dashboard');
        } elseif (Auth::check() && Auth::user()->role->id == 7) {
            $this->redirectTo = route('libarian.dashboard');
        } 
        else {
            $this->middleware('guest')->except('logout');
        }
    }
}

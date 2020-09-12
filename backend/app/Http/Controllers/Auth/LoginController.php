<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function logout(\Illuminate\Http\Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        // redirectペルパの引数を / から /home へ変更
        return redirect('/home');
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

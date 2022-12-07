<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected function authenticated()
    {
        if (Auth::user()->whoAreYou == "100") {
            return redirect('/admin/dashboard')->with('status', 'Welcome admin!');
        } else {
            return redirect('/home')->with('status', 'Welcome user!');
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

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $filledType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if (auth()->attempt(array($filledType => $input['username'], 'password' => $input['password'])))
        {
            if(Auth::user()->whoAreYou == 100) {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/home');
            }
        }
        else
        {
            return redirect('/login')->with('status', 'email/username or password wrong!');
        }
    }
}

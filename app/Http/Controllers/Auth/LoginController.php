<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function username()
    {
        return 'userid';
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'userid',
            'password'
        ]);

        if(auth()->attempt(array('userid' => $input['userid'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == '2')
            {
                return redirect()->route('admin');
            }
            elseif (auth()->user()->role == '1')
            {
                return redirect()->route('teacher');
            }
            else
            {
                return redirect()->route('student');
            }
        }
        else
        {
            return redirect('/login');
        }

    }
}

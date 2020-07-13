<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

    /**
     * Login username to be used by the controller.
     *
     * @var string
     */
    protected $username = "username";

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return $this->username;
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    // public function login(Request $request)
    // {
    //     $input = $request->all();

    //     $this->validate($request, [
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);
    //     if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
    //     {
    //         return redirect()->route('/');
    //     }else{
    //         return redirect()->route('login')
    //             ->with('error','Name And Password Are Wrong.');
    //     }
    // }
}
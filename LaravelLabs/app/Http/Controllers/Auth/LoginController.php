<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Role;
use Illuminate\Database\Eloquent\Model;

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
    protected $redirectTo = '/homepage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {
        if ($user->name=='Enzey'){
            return redirect(route('admin.adminHomepage'));
        }
        else{
            return redirect('\homepage');
        }
    }

    public function determineLoginType(Request $request)
    {
        /**
         * Here I am assuming that the email field on your user model is unique,
         * therefore I am retrieving that specific user by the email they provided
         * at the login form
         */

        $user = \App\User::where('email', $request->email)->first();

        if ($user && $user->user_type == 2) { // Check if the user exists & check their type.
            return redirect('/adminHomepage'); // If they're an admin redirect them to the admin dashboard.
        }

        return redirect('/home');
        // Otherwise proceed normally and redirect the user to the normal home or dashboard.
    }
}

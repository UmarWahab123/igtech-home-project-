<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\User;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


     public function login()
    {
        // dd('ads');
        $remember=false;
        if(isset($_POST['remember'])){
            $remember=true;
        }
        $email=$_POST['email'];
        $password=$_POST['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password],$remember)) {
            $user=Auth::user();
            return Redirect('/profile');
        }
        else{
             $message['title']= 'Error';
             $message['text'] = "Credetional do not match our record";
             Session::put('message', $message);
             Session::put('login_msg', "Credetional do not match our record");
             return redirect()->back();
            }
    }

    public function logout(Request $request)
    {
        $user=Auth::user();
        Auth::logout();
        Session::flush();
        return Redirect('/login');
    }



}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Brian2694\Toastr\Facades\Toastr;


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

            $validator = 'Username/Email-Address And Password Are Wrong';
  
            $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
                if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
                {
                    // return redirect()->route('/');
                    Toastr::success('Authenticated successfully :)','Success');
                    return redirect::to('/');

                }else{
                    Toastr::success('Username/Email-Address or Password is wrong :)','Error');
                    
                    return redirect()->route('login')
                                    ->with('error','Username/Email-Address or Password is wrong.');
                }
          
        } 
}

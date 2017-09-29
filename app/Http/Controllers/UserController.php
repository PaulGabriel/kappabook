<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
Use Session;
use App\Cart;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'sex' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        $user = new User([
            'sex' => $request->input('sex'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        Auth::login($user);
       
        return redirect()->route('user.profile');
    }
    public function getSignin()
    {
        return view('user.login');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);
    
    if(Auth::attempt([
        'email' => $request->input('email'), 
        'password' => $request->input('password')])){

        return redirect()->route('user.profile');
    }
        return redirect()->back();
    }

    public function getProfile(){
        $user = User::all();
        $user_id = Auth::user()->id;

        return view('user.profile',['user' => $user, 'userid' => $user_id]);
    }

    public function getLogout(){
        
        Auth::logout();
      
        return redirect()->route('product.index');
    }
}

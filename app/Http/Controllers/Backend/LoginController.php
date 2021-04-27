<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function loginForm()
    {
        return view('backend.login.login');
    }


    //Register
    public function showRegistrationForm(){
        return view('backend.login.registrationForm');
    }

    public function registration(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'email|required|unique:users',
            'password'=>'required|min:5'

        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        return redirect()->route('loginForm')->with('success','User Registration Successful.');
    }


    //login
    public function login(Request $request){
        //validate input
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);

        //authenticate
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if(Auth::attempt($credentials)){
            $request -> session() -> regenerate();
                return redirect()->route('home');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);
    }
    public function logout(){
        Auth::logout();

        return redirect()->route('home')->with('success','Logout Successful.');
    }

}

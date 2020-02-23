<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function showSample()
    {
        return view('sample');
    }

    public function showMimic()
    {
        return view('mimic');
    }


    // public function showLogin()
    // {
    //     return view('login_done');
    // }

    public function postUser(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                return redirect()->route('login_done');
            } else {
                return redirect()->route('user');
            }
        } else {
            return redirect()->route('user');
        }
        // if(count($check)){
        //     return view('login_done');
        // }else{
        //     return view('user',['users_data'=>User::all()]);
        // }
    }

    public function getUser()
    {
        return view('login_done');
    }

    public function showUser()
    {
        return view('user', ['users_data' => User::all()]);
    }

    
    public function postNewuser(Request $request)
    {
        // validate
        $request->validate([
            "name" => "String|required",
            "email" => "String|required|email|unique:users",
            "password" => "String|required"
            ]);
            $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        // とうろく
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
            ]);
            return view('user');
    }

    public function showRegister()
    {
        return view('register');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required'],
            'email' => ['required','email','min:3'],
            'password' => ['required','min:3']
        ]);

        User::create($formFields);

        $users = User::all();
        return view('index',compact('users'));
    }

    public function login(){
        return view('login');
    }

    public function loginProcess(Request $request){
        $formFields = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($formFields)){
            return redirect()->route('index');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

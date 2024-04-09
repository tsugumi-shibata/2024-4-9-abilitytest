<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('contacts.register');
    }


    public function register(RegisterRequest $request)
    {
        $request->validate([
            'name' => 'required','string',
            'email' => 'required','email',
            'password' => 'required',
        ]);
        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
        ]);

        return redirect()->route('contacts.login')->with('success','ユーザー登録が完了しました。ログインしてください。');

        // return view('contacts.register');
    }
    public function login(Request $request)
    {
        return view('contacts.login');
    }





    // // public function showLoginForm()
    // // {
    // //     return view('contacts.login');
    // // }
    
    // // public function login(Request $request)
    // // {
    // //     if(Auth::attempt(['email' => $request->email,'password' => $request->password])) {
    // //         return redirect()->route('contacts.admin');
    // //     }

    // //     return redirect()->back()->withInput()->withErrors(['email' => 'ログインに失敗しました']);
    // // }
}

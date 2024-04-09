<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function register()
    {
        return view('contacts.register');
    }
     public function login()
    {
        return view('contacts.login');
    }
     public function admin()
    {
        return view('contacts.admin');
    }
     public function index()
    {
        return view('contacts.index');
    }
     public function confirm()
    {
        return view('contacts.confirm');
    }
    public function thanks()
    {
        return view('contacts.thanks');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }
    //入力内容を表示する処理
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only('last_name','first_name','gender','email','tel','address','building','category','detail');
        
        // viewへ値を受け渡す ['contact' => $contact]でも可
        return view('/contacts/confirm',compact('contact'));
    }

    // confirmのformタグから送信された値を受け取る
    public function store(ContactRequest $request)
    {
        $contact = $request->only('last_name','first_name','gender','email','tel','address','building','category','detail');
        Contact::create($contact);
        return view('thanks');
    }

}

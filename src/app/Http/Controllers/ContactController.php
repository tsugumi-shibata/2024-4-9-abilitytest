<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(ContactRequest $request)
    {
        $lastName = $request->input('last_name');
        $firstName = $request->input('first_name');
        $fullName = $lastName . ' ' . $firstName;

        $contact = $request->only('last_name','first_name','gender','email','tel','address','building','category','detail');

        return view('contacts.confirm',compact('contact','fullName'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only('last_name','first_name','gender','email','tel','address','building','category','detail');

        Contact::create($contact);

        return view('contacts.thanks');
    }




    // public function confirm(Request $request)
    // {
    //     $lastName = $request->input('last_name');
    //     $firstName = $request->input('first_name');
    //     $fullName = $lastName . ' ' . $firstName;

    //     return view('contacts.confirm',['fullName' => $fullName]);
    // }




    // //入力内容を表示する処理
    // public function confirm(ContactRequest $request)
    // {
    //     $contact = $request->only('last_name','first_name','gender','email','tel','address','building','category','detail');
        
    //     // viewへ値を受け渡す ['contact' => $contact]でも可
    //     return view('/contacts/confirm',compact('contact'));
    // }

    // // confirmのformタグから送信された値を受け取る
    // public function store(ContactRequest $request)
    // {
    //     $contact = $request->only('last_name','first_name','gender','email','tel','address','building','category','detail');
    //     Contact::create($contact);
    //     return view('thanks');
    // }

}

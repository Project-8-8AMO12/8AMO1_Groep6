<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send()
    {
        $data = request()->validate(['naam' => 'required|min:3|max:25']);
        $data = request()->validate(['email' => 'required|E-mail']);
        $data = request()->validate(['bericht' => 'required|max:1000']);

        $contact = new Contact();
        $contact->naam = request('naam');
        $contact->email = request('email');
        $contact->bericht = request('bericht');
        $contact->save();

        return view('/contact');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MessageController extends Controller
{
    public function messages(){
        $contactData = DB::table('contacts')->get();
        return view('auth/messages', ['contacts_data' => $contactData]);
    }

    public function delete($id){
        DB::delete('delete from contacts where id = ?',[$id]);
        return $this->messages();
    }

    public function viewindividual($id){

        $contactData = DB::table('contacts')->where('id', $id)->first();
        return view('auth/message', ['contact_data' => $contactData]);
    }
}

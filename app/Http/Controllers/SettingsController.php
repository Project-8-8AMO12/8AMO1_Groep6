<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class SettingsController extends Controller
{
    public function settings(){
        $user = DB::table('users')->where('name', Auth::user()->name)->first();
        return view('auth/settings', ['user_data' => $user]);

    }

    public function insert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $data=array('name'=>$name,"email"=>$email,"password"=>Hash::make($request->password));
        DB::table('users')->update($data);
        return $this->settings();
    }
}

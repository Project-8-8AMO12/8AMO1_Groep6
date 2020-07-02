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
        DB::table('users')->where('id',Auth::id())->update($data);
        return $this->settings();
    }

    public function usettings(){
        $user = DB::table('users')->get();
        return view('auth/usettings', ['user_data' => $user]);

    }

    public function deleteuser($id){
        DB::delete('delete from users where id = ?',[$id]);
        return $this->usettings();
    }

    public function edituser($id){
        $user = DB::table('users')->where('id', $id)->first();
        return view('auth/edituser', ['user_data' => $user]);
    }

    public function edituserpost(Request $request, $id){
        $name = $request->input('name');
        $email = $request->input('email');
        $data=array('name'=>$name,"email"=>$email);
        DB::table('users')->where('id',$id)->update($data);
        return $this->edituser($request->input('id'));
    }

    public function adduser(){
        return view('auth/adduser');
    }

    public function  adduserpost(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $data=array('name'=>$name,"email"=>$email,"password"=>Hash::make($request->password));
        DB::table('users')->insert($data);
        return $this->usettings();
    }
}
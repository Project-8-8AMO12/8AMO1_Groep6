<?php

namespace App\Http\Controllers;

use App\CreateAndUpdate;
use Illuminate\Http\Request;

class CreateAndUpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUpdate($id)
    {
        $editpage = CreateAndUpdate::where('id', $id)->first();
        return view('editpagina', ['editpage' => $editpage]);
    }

    public function getPages()
    {
        $getpages = CreateAndUpdate::all();
        return view('home', ['getpages' => $getpages]);
    }
    public function getCreate()
    {

        return view('createpagina');
    }

    public function Create()
    {
        $data = request()->validate(['title' => 'required|min:3|max:50']);
        $data = request()->validate(['subtitle' => 'required|max:50']);
        $data = request()->validate(['content' => 'required|max:100000']);

        $CreateAndUpdate = new CreateAndUpdate;
        $CreateAndUpdate->title = request('title');
        $CreateAndUpdate->subtitle = request('subtitle');
        $CreateAndUpdate->content = request('content');
        $CreateAndUpdate->save();
        return redirect('/home')->with('success','data opgeslagen');
    }

    public function Update($id)
    {

        $data = request()->validate(['title' => 'required|min:3|max:50']);
        $data = request()->validate(['subtitle' => 'required|max:50']);
        $data = request()->validate(['content' => 'required|max:1000']);

        $CreateAndUpdate = CreateAndUpdate::find($id);
        $CreateAndUpdate->title = request('title');
        $CreateAndUpdate->subtitle = request('subtitle');
        $CreateAndUpdate->content = request('content');
        $CreateAndUpdate->save();

        return redirect('/home')->with('success','data updated');
    }

    public function Delete($id)
    {
        $delete = CreateAndUpdate::where('id', $id)->first();
        if($delete) {
            $delete->delete();
            return redirect('/home')->with('success', 'data verwijderd');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\CreateAndUpdate;
use Illuminate\Http\Request;

class CreateAndUpdateController extends Controller
{
    public function getedit($id)
    {
        $getedit = CreateAndUpdate::find($id);

        return view('internals.editpagina', ['getedit' => $getedit]);
    }

    public function create()
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

    public function update($id)
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

    public function delete($id)
    {
        $CreateAndUpdate = CreateAndUpdate::find($id);
        $CreateAndUpdate->delete();

        return redirect('/home')->with('success','data verwijderd');
    }
}

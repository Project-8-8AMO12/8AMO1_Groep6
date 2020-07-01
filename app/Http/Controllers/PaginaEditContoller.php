<?php

namespace App\Http\Controllers;

use App\CreateAndUpdate;
use Illuminate\Http\Request;

class PaginaEditContoller extends Controller
{
    public function getedit($id)
    {
        $getedit = CreateAndUpdate::find($id);

        return view('internals.pagina', ['getedit' => $getedit]);
    }

    public function getcontent()
    {
        $getcontent = CreateAndUpdate::all();

        return view('internals.pagnias',['paginas' => $getcontent]);
    }
}

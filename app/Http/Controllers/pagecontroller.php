<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function index1()
    {
        return view('activiteiten');
    }

    public function index2()
    {
        return view('cursussen');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function index1()
    {
        return view('activiteiten');
    }

    public function index2()
    {
        return view('cursussen');
    }

    public function index3()
    {
        return view('ver');
    }

    public function index4()
    {
        return view('zwerm');
    }

    public function index5()
    {
        return view('lid');
    }

    public function index6()
    {
        return view('gallery');
    }


}

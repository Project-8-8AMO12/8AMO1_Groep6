<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){ return view('welcome'); }
    public function contact(){ return view('contact'); }
    public function agenda(){ return view('agenda'); }
    public function nieuws(){ return view('nieuws'); }
    public function bijenstal(){ return view('bijenstal'); }
    public function contact(){ return view('contact'); }
    public function shop(){ return view('shop'); }
    public function stertselaar(){ return view('stertselaar'); }
    public function galerij(){ return view('galerij'); }
    public function activiteiten(){ return view('activiteiten'); }
    public function cursussen(){ return view('cursussen'); }
    public function vereniging(){ return view('vereniging'); }
    public function zwerm(){ return view('zwerm'); }
    public function lid(){ return view('lid'); }
}

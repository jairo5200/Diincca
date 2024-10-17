<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio(){
        return view('paginas.index');
    }
    public function productos(){
        return view('paginas.productos');
    }
    public function nosotros(){
        return view('paginas.nosotros');
    }
    public function contactanos(){
        return view('paginas.contactanos');
    }
}

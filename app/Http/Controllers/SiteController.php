<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function Inicio(){
        return view('inicio');
    }
    public function horario(){
        return view('horario');
    }
    public function produtos(){
        return view('produtos');
    }
    
    
}   


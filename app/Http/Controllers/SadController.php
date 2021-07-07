<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Hero;
use Illuminate\Http\Request;

class SadController extends Controller
{
    public function index(){
        $contactos = Contacto::where('estado','<>','fechado')->count();
        $contactosnovos = Contacto::where('estado','nova')->count();
        return view ('sad.dashboard',compact('contactos','contactosnovos'));
    }
}

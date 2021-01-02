<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SadController extends Controller
{
    public function index(){
        return view ('sad.dashboard');
    }
}

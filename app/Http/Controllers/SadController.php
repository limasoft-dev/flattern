<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class SadController extends Controller
{
    public function index(){
        return view ('sad.dashboard');
    }
}

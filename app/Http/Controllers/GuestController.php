<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GuestController extends Controller
{
    public function index(){
        return view ('welcome');
    }

    public function about(){
        return view ('guest.about');
    }

    public function servicos(){
        return view ('guest.servicos');
    }

    public function portfolio(){
        return view ('guest.portfolio');
    }
}

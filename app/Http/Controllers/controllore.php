<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllore extends Controller
{
    public function index(){
        return view('home');
    }
}

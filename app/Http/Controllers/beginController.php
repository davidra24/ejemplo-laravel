<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beginController extends Controller
{
    public function index(){
        return view('views.begin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users=[['id'=>'3469','name'=>'simon'],['id'=>'1930','name'=>'lola']];
        return view('example', ['users'=>$users]);
    }
}

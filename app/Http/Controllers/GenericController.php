<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function index(){
        return view('index',[
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mhscontroller extends Controller
{
    public function index(){
        return view('mhs');
    }
    public function inputData(){
        return view('mhsinsert');
    }
}

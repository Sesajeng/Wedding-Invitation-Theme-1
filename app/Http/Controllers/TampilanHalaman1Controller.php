<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilanHalaman1Controller extends Controller
{
    public function index(){
    return view('halaman1');
    }
}

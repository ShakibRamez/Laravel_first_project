<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class futureControllar extends Controller
{
    public function future(){
        return view('admin.index');
    }
    public function table(){
        return view('admin.category');
        
    }
}

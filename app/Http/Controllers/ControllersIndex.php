<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllersIndex extends Controller
{
    public function index(){
        return view('Frontend.content.index');
    }
}

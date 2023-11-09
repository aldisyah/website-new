<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class ControllerSiswa extends Controller
{
    public function index() {
        return view('backend.user.index');
    }

    public function edit(){

    }
}

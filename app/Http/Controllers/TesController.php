<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    public function index()
    {
        return view('Baru.Admin.dashboard');
        // return view('Baru.Admin.Anggota.tb-anggota');
    }
}

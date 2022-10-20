<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistasiSiswa extends Controller
{
    public function regis()
    {
        return view("registasi");
    }

    public function store(Request $req){
        return $req->all();
    }
}

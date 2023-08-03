<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('sesi-3');
    }

    public function belajar(){
        return view('belajar', [
            'topik'     => 'Pengenalan View Dan Route', 
            'tanggal'   => '2023/08/01'
        ]);
    }

    public function belajar2(){
        return view('belajar2', [
            'topik'     => 'Pengenalan View Dan Route', 
            'tanggal'   => '2023/08/01'
        ]);
    }
}

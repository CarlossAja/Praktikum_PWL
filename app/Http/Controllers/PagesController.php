<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('welcome',[
            'isi_data' => 'Halaman awal',
            'judul' => 'selamat datang',
            'pesan' => 'ok'
        ]);
    }
    public function about(){
        return view('about',[
            'isi_data' => 'Halaman awal',
            'nama' => 'Carlos3',
            'judul' => '',
            'nim' => '221323'
        ]);
    }
    public function dosen(){
        return view('dosen',[
            'isi_data' => 'ok',
            'dosen' => 'Carlos2',
            'judul' => 'aman'
        ]);
    }
    public function wisata(){
        return view('wisata',[
            'isi_data' => 'Hal',
            'wisata' => 'Carlos1',
            'judul' => 'aman'
        ]);
    }
}
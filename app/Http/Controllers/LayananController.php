<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function pusatRehabilitasiStroke()
    {
        return view('layanan.stroke-rehabilitation');
    }

    public function terapiRobotik()
    {
        return view('layanan.terapi-robotik');
    }

    public function spesialisGigi()
    {
        return view('layanan.spesialis-gigi');
    }

    public function musculosceletal()
    {
        return view('layanan.musculoskeletal');
    }

    public function index()
    {
        return view('layanan.index');
    }
}

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

    public function lokomatProSensation()
    {
        return view('layanan.lokomat-pro-sensation');
    }

    public function cmillVrPlus()
    {
        return view('layanan.cmill-vr-plus');
    }

    public function andago()
    {
        return view('layanan.andago');
    }

    public function armeoSpring()
    {
        return view('layanan.armeo-spring');
    }

    public function armMotusM2()
    {
        return view('layanan.arm-motus-m2');
    }

    public function fourierEcosystem()
    {
        return view('layanan.fourier-ecosystem');
    }

    public function aquaticRehabilitation()
    {
        return view('layanan.aquatic-rehabilitation');
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

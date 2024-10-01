<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function show_landingpage() {
        return view('landingpage2.homepage.homepage');
    }
    // Belum dibuat
    public function show_klinik () {
        return view('landingpage2.klinikpage.klinikpage');
    }
    public function show_galeri() {
        return view('landingpage2.homepage.homepage-galeri');
    }
    public function show_pelayanan() {
        return view('landingpage2.homepage.homepage-pelayanan');
    }
    public function show_kontak() {
        return view('landingpage2.homepage.homepage-kontak');
    }
}

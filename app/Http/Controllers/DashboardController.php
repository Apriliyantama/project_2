<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Klinik;
use App\Models\Dokter;
use App\Models\Reservasi;

class DashboardController extends Controller
{
    public function dashboard_petowner()
    {
        $dokter = Dokter::all();
        $data = Klinik::all();
        return view('PetOwner.dashboard.dashboard', compact('data', 'dokter'));
    }

    public function dashboard_admin()
    {
        //menghitung jumlah user klinik
        $klinik = User::where('role', 'admin_klinik')->count();
        //menghitung jumlah user petowner
        $petowner = User::where('role', 'petowner')->count();
        //menghitung jumlah user dokter
        $dokter = User::where('role', 'dokter')->count();
        //menampilkan jumlah user klinik, petowner, dan dokter
        return view("admin.dashboard", compact('klinik', 'petowner', 'dokter'));
    }

    public function dashboard_klinik()
    {
        $reservasis = Reservasi::with('dokter')->get();

        return view('Klinik.dashboard.dashboard', compact('reservasis'));
    }

    public function dashboard_dokter()
    {
        return view("dokter.dashboard");
    }
}

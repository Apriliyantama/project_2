<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LogoutController extends Controller
{
    // Logout Admin
    public function logoutAdmin()
    {
        Auth::logout();

        return redirect('/login/petowner');
    }

        // Logout Dokter
        public function logoutDokter()
        {
            Auth::logout();
    
            return redirect('/login/petowner');
        }

            // Logout Klinik
    public function logoutKlinik()
    {
        Auth::logout();

        return redirect()->route('landingpage2.klinik');
    }

        // Logout PetOwner
        public function logoutPetOwner()
        {
            Auth::logout();
    
            return redirect()->route('landingpage2');
        }
}

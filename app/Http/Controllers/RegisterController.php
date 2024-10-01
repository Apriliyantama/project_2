<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    // Register PetOwner
    public function showRegistrationFormPetOwner()
    {
        return view('PetOwner.auth.daftar');
    }

    public function registerPetOwner(Request $request)
    {
        // Validasi data
        $request->validate([
            
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            
        ]);
    
        // Membuat pengguna baru
        $user = User::create([
            
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'petowner'
        ]);
    
        // // Mengasosiasikan peran dengan pengguna
        // $role = User::where('email', 'petowner')->first();
        // $user->roles()->attach($role);
    
        return redirect('dashboard_petowner');
    }

    //Register Klinik
    public function showRegistrationFormKlinik()
    {
        return view('Klinik.auth.register');
    }

    public function registerKlinik(Request $request)
    {
        // Validasi data
        $request->validate([
            
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            
        ]);
    
        // Membuat pengguna baru
        $user = User::create([
            
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'klinik'
        ]);
    
        // Mengasosiasikan peran dengan pengguna
        // $role = User::where('email', 'klinik')->first();
        // $user->roles()->attach($role);
    
        return redirect('PetOwner.dashboard.dashboard');
    }

    //register dokter
        // Register PetOwner
        public function showRegistrationFormDokter()
        {
            return view('Dokter.auth.daftar');
        }
    
        public function registerDokter(Request $request)
        {
            // Validasi data
            $request->validate([
                
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                
            ]);
        
            // Membuat pengguna baru
            $user = User::create([
                
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'dokter'
            ]);
        
            // Mengasosiasikan peran dengan pengguna
            // $role = User::where('email', 'dokter')->first();
            // $user->roles()->attach($role);
        }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginFormAdmin()
    {
        return view('Admin.auth.login');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == 'admin') {
            return redirect()->intended('/dashboard_admin')
                ->withSuccess('You have successfully logged in!');
            } else {
                return back()->withErrors([
                    'email' => 'You do not have permission to access the Admin dashboard.',]);
            }
        }
    
        return back()->withErrors([
            'email' => 'Your provided credentials do not match our records.',
        ]);
    }

    //login Klinik
    public function showLoginFormKlinik()
    {
        return view('Klinik.auth.login');
    }

    public function loginKlinik(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == 'klinik') {
            return redirect()->intended('/dashboard_klinik')
                ->withSuccess('You have successfully logged in!');
            } else {
                return back()->withErrors([
                    'email' => 'You do not have permission to access the Admin dashboard.',]);
            }
        }
    
        return back()->withErrors([
            'email' => 'Your provided credentials do not match our records.',
        ]);
    }

    //login dokter
    public function showLoginFormDokter()
    {
        return view('Dokter.auth.login');
    }

    public function loginDokter(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == 'dokter') {
            return redirect()->intended('/dashboard_dokter')
                ->withSuccess('You have successfully logged in!');
            } else {
                return back()->withErrors([
                    'email' => 'You do not have permission to access the Admin dashboard.',]);
            }
        }
    
        return back()->withErrors([
            'email' => 'Your provided credentials do not match our records.',
        ]);
    }

    //login Petowner
    public function showLoginFormPetOwner()
    {
        return view('PetOwner.auth.login');
    }

    public function loginPetOwner(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == 'petowner') {
            return redirect()->intended('/dashboard_petowner')
                ->withSuccess('You have successfully logged in!');
            } else {
                return back()->withErrors([
                    'email' => 'You do not have permission to access the Admin dashboard.',]);
            }
        }
    
        return back()->withErrors([
            'email' => 'Your provided credentials do not match our records.',
        ]);
    }
}

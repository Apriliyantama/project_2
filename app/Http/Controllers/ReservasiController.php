<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Dokter;
use App\Models\Klinik;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ReservasiController extends Controller
{
    public function create()
    {
        $kliniks = Klinik::all();
        $dokters = Dokter::all();
        $userId = auth()->id(); // Atau bisa menggunakan ID pengguna statis untuk pengujian
        return view('PetOwner.reservasi.create', compact('dokters', 'kliniks', 'userId'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'dokter_id' => 'required|exists:dokters,id',
            'nama_hewan' => 'required|string|max:255',
            'jenis_hewan' => 'required|string',
            'keluhan' => 'required|string|max:500',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:H:i',
        ]);

        $reservasi = new Reservasi();
        // $reservasi->user_id = Auth::id(); // Assuming the user is logged in
        $reservasi->dokter_id = $request->dokter_id;
        $reservasi->nama_hewan = $request->nama_hewan;
        $reservasi->jenis_hewan = $request->jenis_hewan;

        if ($request->jenis_hewan == 'lainnya') {
            $request->validate([
                'jenis_hewan_lainnya' => 'required|string|max:255',
            ]);
            $reservasi->jenis_hewan = $request->jenis_hewan_lainnya;
        }

        $reservasi->keluhan = $request->keluhan;
        $reservasi->appointment_date = $request->appointment_date;
        $reservasi->appointment_time = $request->appointment_time;
        
        $reservasi->save();

        return redirect()->route('reservasi.riwayat')->with('success', 'Reservasi berhasil dibuat.');
    }
    
    

    public function riwayatJanjiTemu()
    {
        $reservasis = Reservasi::with('dokter')->get();

        return view('PetOwner.reservasi.riwayat', compact('reservasis'));
    }

    public function index()
    {
        $reservasis = Reservasi::with('dokter')->paginate(10);

        return view('Klinik.dashboard.dashboard', compact('reservasis'));
    }

    private function generateNomorAntrian($appointmentId)
    {
        // Logika penentuan nomor antrian (contoh sederhana: menggunakan tiga karakter pertama dari ID)
        return 'A' . substr($appointmentId, 0, 3);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservasi $reservasi)
    {
        return view('reservasis.edit', compact('reservasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservasi $reservasi)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'dokter_id' => 'required|exists:dokters,id',
            'nama_hewan' => 'required|string|max:255',
            'jenis_hewan' => 'required|string|max:255',
            'keluhan' => 'required|string|max:255',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|time',
        ]);

        $reservasi->update($request->all());

        return redirect()->route('edit_reservasi', $reservasi->id)
                         ->with('success', 'Reservasi updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservasi $reservasi)
    {
        $reservasi->delete();

        return redirect()->route('create_reservasi')
                         ->with('success', 'Reservasi deleted successfully.');
    }
}

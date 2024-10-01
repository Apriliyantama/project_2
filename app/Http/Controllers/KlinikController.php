<?php
namespace App\Http\Controllers;

use App\Models\Klinik;
use Illuminate\Http\Request;

class KlinikController extends Controller
{
    // public function index() 
    // {
    //     $data = Klinik::all();
    //     return redirect->route('dashboard_petowner')->compact('data');
    // }
    public function show($id) {
        $data = Klinik::all();
        $klinik = Klinik::findOrFail($id);
        return view('Klinik.profil.show', compact('data', 'klinik'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Klinik.profil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'jam_buka' => 'required|date_format:H:i',
            'jam_tutup' => 'required|date_format:H:i',
        ]);

        Klinik::create($request->all());

        return redirect()->route('dashboard_klinik')->with('success', 'Klinik created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $klinik = Klinik::findOrFail($id);
        return view('Klinik.profil.update', compact('klinik'));
    }

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'nomor_telepon' => 'required|string|max:15',
        'jam_buka' => 'required|date_format:H:i',
        'jam_tutup' => 'required|date_format:H:i',
    ]);

    $klinik = Klinik::findOrFail($id);
    $klinik->update($request->all());

    return redirect()->route('klinik.show', $klinik->id)->with('success', 'Klinik updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Klinik $klinik)
    {
        $klinik->delete();

        return redirect()->route('create_klinik')
                         ->with('success', 'Klinik deleted successfully.');
    }

        /**
     * Find the specified resource by ID.
     */
    public function find($id)
    {
        $klinik = Klinik::findOrFail($id);
        return view('kliniks.show', compact('klinik'));
    }
}

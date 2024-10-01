<?php
namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokters = Dokter::all();
        return view('Klinik.dokter.index', compact('dokters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Klinik.dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesialisasi' => 'required|string|max:255',
        ]);

        Dokter::create($request->all());

        return redirect()->route('dokter.index')->with('success', 'Dokter created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('Klinik.dokter.show', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('Klinik.dokter.update', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesialisasi' => 'required|string|max:255',
        ]);

        $dokter = Dokter::findOrFail($id);
        $dokter->update($request->all());

        return redirect()->route('dokter.show', $dokter->id)->with('success', 'Dokter updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect()->route('dokter.index')->with('success', 'Dokter deleted successfully.');
    }

    /**
     * Find the specified resource by ID.
     */
    public function find(Request $request)
    {
        $dokter = Dokter::where('nama', 'like', '%' . $request->input('query') . '%')->get();
        return view('Klinik.dokter.find', compact('dokter'));
    }
}

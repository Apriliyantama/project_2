<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Klinik;

class ReviewController extends Controller
{
    public function show($id)
    {
        $klinik = Klinik::find($id); // This will now use the 'klinik_id' column
        $review = Review::all();
    
        if (!$klinik) {
            return redirect()->route('hom')->with('error', 'Klinik tidak ditemukan');
        }
    
        return view('PetOwner.ulasan.show', compact('klinik', 'review'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Validasi data testimonial
                $request->validate([
                    'content' => 'required',
                ]);
                Review::create($request->all());
        
                // Simpan testimonial ke database
                // $testimonial = new Review([
                //     'content' => $request->content,
                // ]);
        
                // Asosiasikan testimonial dengan user yang sedang login (jika ada)
                // if ($user = auth()->user()) {
                //     $testimonial->user()->associate($user);
                // }
        
                // $testimonial->save();
        
                return redirect()->route('reviews.show', ['id' => $request->klinik_id])->with('success', 'Testimonial berhasil disubmit!');
            }
}

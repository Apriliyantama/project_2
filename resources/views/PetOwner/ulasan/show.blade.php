@extends('PetOwner.layout.petowner')
@section('content')

<main id="main" class="main">

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="container mx-auto p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Data Klinik</h2>
                                <table class="table-auto w-full">
                                    <tbody>
                                        <tr>
                                            <td class="border px-4 py-2">Nama</td>
                                            <td class="border px-4 py-2">{{ $klinik->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Jenis</td>
                                            <td class="border px-4 py-2">{{ $klinik->jenis }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Alamat</td>
                                            <td class="border px-4 py-2">{{ $klinik->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Nomor Telepon</td>
                                            <td class="border px-4 py-2">{{ $klinik->nomor_telepon }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Jam Buka</td>
                                            <td class="border px-4 py-2">{{ $klinik->jam_buka }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Jam Tutup</td>
                                            <td class="border px-4 py-2">{{ $klinik->jam_tutup }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('reservasi.create') }}" class="inline-block px-4 py-2 mt-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600">
                                    Jadwalkan Kunjungan
                                </a> 
                            </div>
                        </div>
                        
                        <div class="container mx-auto p-4 mt-6">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Riwayat Review</h2>
                                @if($review->isEmpty())
                                    <p>Tidak ada review untuk klinik ini.</p>
                                @else
                                    @foreach($review as $review)
                                        <div class="mb-4">
                                            {{-- <p><strong>{{ $review->user->name }}</strong> ({{ $review->created_at->format('d M Y') }})</p> --}}
                                            <p>{{ $review->content }}</p>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="container mx-auto p-4 mt-6">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Berikan Review Anda</h2>
                                <form action="{{ route('reviews.store', ['id' => $klinik->id]) }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Review</label>
                                        <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border border-gray-300" placeholder="Berikan ulasan..."></textarea>
                                    </div>
                                    <input type="hidden" name="klinik_id" value="{{ $klinik->id }}">
                                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection

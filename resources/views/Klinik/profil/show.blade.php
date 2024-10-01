@extends('Klinik.layout.klinik')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profil Klinik</h1>
    </div><!-- End Page Title -->

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
                                    @foreach($data as $data)
                                    <tbody>
                                        <tr>
                                            <td class="border px-4 py-2">Nama</td>
                                            <td class="border px-4 py-2">{{ $data['nama'] }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Jenis</td>
                                            <td class="border px-4 py-2">{{ $data['jenis'] }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Alamat</td>
                                            <td class="border px-4 py-2">{{ $data['alamat'] }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Nomor Telepon</td>
                                            <td class="border px-4 py-2">{{ $data['nomor_telepon'] }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Jam Buka</td>
                                            <td class="border px-4 py-2">{{ $data['jam_buka'] }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Jam Tutup</td>
                                            <td class="border px-4 py-2">{{ $data['jam_tutup'] }}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                <a href="{{ route('klinik.edit', $klinik->id)}}" class="inline-block mt-4 text-blue-500">Update</a>
                            </div>
                        </div>
                        
                          
                    </div>
                </div>

            </div>
    </section>
</main>

@endsection
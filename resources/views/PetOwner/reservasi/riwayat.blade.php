@extends('PetOwner.layout.petowner')
@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            {{-- <h1>Riwayat</h1> --}}
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="container mx-auto mt-5">
                                <h1 class="text-2xl font-bold mb-5">Daftar Riwayat</h1>
                                
                                @if($reservasis->count())
                                    <div class="overflow-x-auto">
                                        <table class="min-w-full bg-white shadow-md rounded-lg">
                                            <thead class="bg-gray-800 text-white">
                                                <tr>
                                                    <th class="w-1/12 px-4 py-2">No</th>
                                                    <th class="w-2/12 px-4 py-2">Nama Hewan</th>
                                                    <th class="w-2/12 px-4 py-2">Jenis Hewan</th>
                                                    <th class="w-3/12 px-4 py-2">Keluhan</th>
                                                    <th class="w-2/12 px-4 py-2">Nama Dokter</th>
                                                    <th class="w-2/12 px-4 py-2">Tanggal Janji Temu</th>
                                                    <th class="w-2/12 px-4 py-2">Waktu Janji Temu</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($reservasis as $reservasi)
                                                    <tr class="border-t">
                                                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                                        <td class="px-4 py-2">{{ $reservasi->nama_hewan }}</td>
                                                        <td class="px-4 py-2">{{ $reservasi->jenis_hewan }}</td>
                                                        <td class="px-4 py-2">{{ $reservasi->keluhan }}</td>
                                                        <td class="px-4 py-2">{{ $reservasi->dokter->nama }}</td>
                                                        <td class="px-4 py-2">{{ $reservasi->appointment_date }}</td>
                                                        <td class="px-4 py-2">{{ $reservasi->appointment_time }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                     

                                @else
                                    <p class="text-red-500 mt-5">Tidak ada reservasi yang ditemukan.</p>
                                @endif
                            </div>                            

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

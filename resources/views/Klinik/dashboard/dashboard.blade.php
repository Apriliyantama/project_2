@extends('Klinik.layout.klinik')
@section('content')
    

{{-- <div class="container">

    <div class="btn-box mb-3">
        <a href="{{ route('klinik.create') }}">
            <button class="btn btn-primary">Tambah Reservasi</button>
        </a>
    </div>
    
    <h1>Daftar Reservasi</h1>
    
    @if($reservasis->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Hewan</th>
                    <th>Jenis Hewan</th>
                    <th>Keluhan</th>
                    <th>Nama Dokter</th>
                    <th>Tanggal Janji Temu</th>
                    <th>Waktu Janji Temu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservasis as $reservasi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $reservasi->nama_hewan }}</td>
                        <td>{{ $reservasi->jenis_hewan }}</td>
                        <td>{{ $reservasi->keluhan }}</td>
                        <td>{{ $reservasi->dokter->nama_dokter }}</td>
                        <td>{{ $reservasi->appointment_date }}</td>
                        <td>{{ $reservasi->appointment_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        {{ $reservasis->links() }} <!-- For pagination links -->
    @else
        <p>Tidak ada reservasi yang ditemukan.</p>
    @endif
</div>

@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-5">

<div class="container mx-auto mt-5">
    {{-- <div class="flex justify-end mb-5">
        <a href="{{ route('klinik.create') }}">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                tambah data klinik
            </button>
        </a>
    </div>
    <div class="flex justify-end mb-5">
        <a href="{{ route('dokter.index') }}">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                data dokter
            </button>
        </a>
    </div> --}}
    
    <h1 class="text-2xl font-bold mb-5">Daftar Reservasi</h1>
    
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
         
        {{-- {{ $reservasis->links() }}<!-- For pagination links --> --}}
    @else
        <p class="text-red-500 mt-5">Tidak ada reservasi yang ditemukan.</p>
    @endif
</div>

</body>
</html>
@endsection

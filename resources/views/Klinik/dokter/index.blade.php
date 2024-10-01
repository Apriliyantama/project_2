{{-- @extends('Klinik.layout.klinik')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Daftar Dokter</h1>
        <a href="{{ route('dokter.create') }}" class="btn btn-primary">Tambah Dokter</a>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Dokter</h5>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Spesialisasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokters as $dokter)
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $dokter->nama }}</td>
        <td>{{ $dokter->spesialisasi }}</td>
        <td>
        </td>
    </tr>
@endforeach

                            </tbody>
                        </table>
                          
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection --}}
{{-- @extends('Klinik.layout.klinik')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Daftar Dokter</h1>
        <a href="{{ route('dokter.create') }}" class="btn btn-primary">Tambah Dokter</a>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Dokter</h5>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Spesialisasi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokters as $dokter)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $dokter->nama }}</td>
                                        <td>{{ $dokter->spesialisasi }}</td>
                                        <td>
                                            
                                            <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<style>
    .pagetitle {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .table {
        margin-top: 20px;
    }

    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }

    .btn {
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .alert {
        margin-top: 20px;
    }

    /* Tombol aksi kecil */
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
</style> --}}

{{-- <main id="main" class="main">

    <div class="pagetitle flex justify-between items-center mb-5">
        <h1 class="text-2xl font-bold">Daftar Dokter</h1>
        <a href="{{ route('dokter.create') }}" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Dokter</a>
    </div>

    <section class="section">
        <div class="flex justify-center">
            <div class="w-full lg:w-3/4">

                <div class="card bg-white p-6 rounded-lg shadow-md">
                    <div class="card-body">
                        <h5 class="card-title text-xl font-semibold mb-4">Daftar Dokter</h5>

                        @if (session('success'))
                            <div class="alert bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 00-.707 0L10 9.293 6.36 5.652a.5.5 0 10-.707.707L9.293 10l-3.64 3.641a.5.5 0 00.707.707L10 10.707l3.641 3.641a.5.5 0 00.707-.707L10.707 10l3.641-3.641a.5.5 0 000-.707z"/></svg>
                                </span>
                            </div>
                        @endif

                        <table class="table-auto w-full border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="border border-gray-300 px-4 py-2">No</th>
                                    <th class="border border-gray-300 px-4 py-2">Nama</th>
                                    <th class="border border-gray-300 px-4 py-2">Spesialisasi</th>
                                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokters as $dokter)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $dokter->nama }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $dokter->spesialisasi }}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            
                                            <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-warning btn-sm bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                                            <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<style>
    .pagetitle {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .table {
        margin-top: 20px;
    }

    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }

    .btn {
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .alert {
        margin-top: 20px;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
</style> --}}
@extends('Klinik.layout.klinik')
@section('content')

<main id="main" class="main">

    <div class="pagetitle flex justify-between items-center mb-5">
        <h1 class="text-2xl font-bold">Daftar Dokter</h1>
        <a href="{{ route('dokter.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Dokter</a>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">

                <div class="card bg-white p-6 rounded-lg shadow-md">
                    <div class="card-body">
                        <h5 class="card-title text-xl font-semibold mb-4">Daftar Dokter</h5>

                        @if (session('success'))
                            <div class="alert bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 00-.707 0L10 9.293 6.36 5.652a.5.5 0 10-.707.707L9.293 10l-3.64 3.641a.5.5 0 00.707.707L10 10.707l3.641 3.641a.5.5 0 00.707-.707L10.707 10l3.641-3.641a.5.5 0 000-.707z"/></svg>
                                </span>
                            </div>
                        @endif

                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border-collapse border border-gray-300">
                                <thead>
                                    <tr class="bg-gray-200">
                                        <th class="border border-gray-300 px-4 py-2">No</th>
                                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                                        <th class="border border-gray-300 px-4 py-2">Spesialisasi</th>
                                        <th class="border border-gray-300 px-4 py-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dokters as $dokter)
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ $dokter->nama }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ $dokter->spesialisasi }}</td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <!-- Contoh tombol aksi -->
                                                <a href="{{ route('dokter.edit', $dokter->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                                                <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection

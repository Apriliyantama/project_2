@extends('Klinik.layout.klinik')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail Dokter</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detail Dokter</h5>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <p id="nama" class="form-control">{{ $dokter->nama }}</p>
                        </div>
                        
                        <div class="mb-3">
                            <label for="spesialisasi" class="form-label">Spesialisasi</label>
                            <p id="spesialisasi" class="form-control">{{ $dokter->spesialisasi }}</p>
                        </div>
                        <a href="{{ route('register_dokter') }}" class="btn btn-secondary">Buat Akun</a>
                        <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection

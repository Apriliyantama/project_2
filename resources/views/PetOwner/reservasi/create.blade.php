@extends('PetOwner.layout.petowner')
@section('content')
<main id="main" class="main">
    <section class="section">
        <div class="flex justify-center">
            <div class="w-full lg:w-2/3">

                <div class="card bg-white p-6 rounded-lg shadow-md">
                    <div class="card-body">
                        <h5 class="card-title text-xl font-semibold mb-4">Form Janji Temu</h5>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- General Form Elements -->
                        <form method="post" action="{{ route('reservasi.store') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="dokter_id" class="block text-sm font-medium text-gray-700">Dokter</label>
                                <select id="dokter_id" name="dokter_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    <option value="" disabled selected>Pilih Dokter</option>
                                    @foreach ($dokters as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->nama }} - {{ $doctor->spesialisasi }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="nama_hewan" class="block text-sm font-medium text-gray-700">Nama Hewan</label>
                                <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="nama_hewan" required>
                            </div>

                            <div class="mb-4">
                                <label for="jenis_hewan" class="block text-sm font-medium text-gray-700">Jenis Hewan</label>
                                <select id="jenis_hewan" name="jenis_hewan" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    <option value="" disabled selected>Pilih Jenis Hewan</option>
                                    <option value="kucing">Kucing</option>
                                    <option value="anjing">Anjing</option>
                                    <option value="burung">Burung</option>
                                    <option value="unggas">Unggas</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div id="lainnyaContainer" class="mb-4 hidden">
                                <label for="jenis_hewan_lainnya" class="block text-sm font-medium text-gray-700">Jenis Hewan Lainnya</label>
                                <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="jenis_hewan_lainnya" name="jenis_hewan_lainnya">
                            </div>

                            <div class="mb-4">
                                <label for="keluhan" class="block text-sm font-medium text-gray-700">Keluhan</label>
                                <textarea class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="keluhan" rows="4" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="appointment_date" class="block text-sm font-medium text-gray-700">Tanggal</label>
                                <input type="date" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="appointment_date" required>
                            </div>

                            <div class="mb-4">
                                <label for="appointment_time" class="block text-sm font-medium text-gray-700">Waktu</label>
                                <input type="time" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="appointment_time" required>
                            </div>

                            <div class="mb-4">
                                <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-medium rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit Form</button>
                            </div>
                        </form><!-- End General Form Elements -->

                        <script>
                            document.getElementById('jenis_hewan').addEventListener('change', function() {
                                var lainnyaContainer = document.getElementById('lainnyaContainer');
                                lainnyaContainer.style.display = this.value === 'lainnya' ? 'block' : 'none';
                            });
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection




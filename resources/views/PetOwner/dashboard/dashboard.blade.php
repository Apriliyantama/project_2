
@extends('PetOwner.layout.petowner')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.5.0/dist/cdn.min.js"></script>

</body>
</html>


<!-- Carousel Section -->
<div id="gallery" class="relative w-full mb-10" data-carousel="slide">
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="homepage/assets/img/21.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Image 1">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="homepage/assets/img/22.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Image 2">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="homepage/assets/img/23.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Image 3">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="homepage/assets/img/24.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Image 4">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="homepage/assets/img/25.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Image 5">
        </div>
    </div>
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<!-- Statistics Section -->
<section class="container mx-auto my-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Total Clinics</h3>
            {{-- <p class="mt-2 text-3xl font-bold text-gray-800 dark:text-white">{{ $totalClinics }}</p> --}}
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Total Doctors</h3>
            {{-- <p class="mt-2 text-3xl font-bold text-gray-800 dark:text-white">{{ $totalDoctors }}</p> --}}
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Total Reviews</h3>
            {{-- <p class="mt-2 text-3xl font-bold text-gray-800 dark:text-white">{{ $totalReviews }}</p> --}}
        </div>
    </div>
</section>

<!-- Clinics Section -->
<section class="container mx-auto my-10">
    <h2 class="text-3xl font-semibold text-center mb-10">Klinik Tersedia</h2>
    <div class="mx-10">
        <div id="list-product" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ($data as $index => $item)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="homepage/assets/img/catt.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->nama }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Alamat: {{ $item->alamat }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jam Buka: {{ $item->jam_buka }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jam Tutup: {{ $item->jam_tutup }}</p>
                        <a href="{{ route('reviews.show', $item->id) }}" class="inline-block px-4 py-2 mt-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600">Lihat Detail</a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>    
</section>

<!-- Doctors Section -->
<section class="container mx-auto my-10">
    <h2 class="text-3xl font-semibold text-center mb-10">Dokter Hewan</h2>
    <div class="mx-10">
        <div id="list-product" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ($dokter as $index => $item)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        {{-- <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Doctor Image" /> --}}
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->nama }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Spesialis: {{ $item->spesialisasi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>    
</section>

<!-- Footer Section -->
<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 HealthyPet</p>
    </div>
</footer>
@endsection

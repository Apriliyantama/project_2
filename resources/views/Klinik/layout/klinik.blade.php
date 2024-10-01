@extends('Klinik.layout.app')
@section('body')
    @include('Klinik.layout.navbar')
    @include('Klinik.layout.sidebar')
    <div class="p-4 sm:mt-14 sm:ml-64">
        @yield('content')
    </div>
@endsection

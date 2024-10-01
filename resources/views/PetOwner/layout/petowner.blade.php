@extends('PetOwner.layout.app')
@section('body')
    @include('PetOwner.layout.navbar')
    @include('PetOwner.layout.sidebar')
    <div class="p-4 sm:mt-14 sm:ml-64">
        @yield('content')
    </div>
@endsection

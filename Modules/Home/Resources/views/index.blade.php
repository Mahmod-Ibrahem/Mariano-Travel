@extends('layout.layouts')
@section('title')
    Top Egypt Tours & Packages | Pyramids, Luxor & Nile Cruise
@endsection
@section('description')
    Book unforgettable Egypt tours to Cairo, Luxor, Aswan & the Nile. Private guides, flexible itineraries, and great-value
    packages—reserve today.
@endsection
@section('title')
    MrEgyptTorus
@endsection
@section('content')
    <!-- LOADING AREA START ===== -->
    {{-- @include('layout.loading-start') --}}
    <!-- LOADING AREA  END ===== -->
    @include('layout.cursor-pointer')
    @include('home::banner')
    @include('home::popular-destination')
    @include('home::popular-tours')
    @include('home::gallery')
    @include('home::why-choose-us')
    {{-- @include('home::counter') --}}
    @include('home::blogs')
    @include('shared::testimonial')
@endsection
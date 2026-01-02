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
    @include('home::why-choose-us')
    @include('home::popular-destination')
    @include('home::tour-category')
    @include('home::popular-tours')
    @include('shared::testimonial')
@endsection
@extends('layout.layouts')
@section('title', $country->name . ' Tours & Excursions')
@section('description', 'Discover the best tours in ' . $country->name . '. Book day trips, excursions, and packages tailored to your interests.')
    @section('content')
        <!-- CONTENT START -->
        @include('layout.header', [
            'title' => $country->name . ' Tours & Excursions',
            'breadcrumb' => $country->name,
            'image' => $country->image ,
        ])


                @include('tour::components.tour-listing')
                <!-- Pagination -->
                @if (method_exists($tours, 'links') && $tours->hasPages())
    <div class="mt-12 flex justify-center">
        {{ $tours->links() }}
    </div>
@endif
    <!-- CONTENT END -->
@endsection

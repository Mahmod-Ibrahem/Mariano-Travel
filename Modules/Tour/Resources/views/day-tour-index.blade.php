@extends('layout.layouts')
@section('title', 'Egypt Day Tours & Excursions')
@section('description', 'Book Egypt day trips and excursions in 2025: Pyramids & Cairo highlights, Luxor temples, Aswan tours, and Red Sea adventures—tailored to your interests.')
    @section('content')
    <!-- CONTENT START -->
    @include('layout.header', [
        'title' => 'Egypt Day Tours & Excursions',
        'breadcrumb' => 'Day Tours',
        'image' => 'Images/day-tours.bg.jpg',
    ])

<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 max-w-6xl mx-auto py-6">   
                        @forelse($categories as $category)
                                @include('category::components.category-card')
                        @empty
                        @endforelse
                    </div>
    <!-- CONTENT END -->
@endsection
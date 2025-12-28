@section('title', 'Egypt Tour Packages | Egypt Sightseeing Tours')
@section('description', 'Explore Egypt in 2026 with curated tour packages—Cairo, Luxor, Aswan & a Nile cruise. Flexible itineraries, trusted guides, and easy online booking')
@extends('layout.layouts')
@section('content')
    <!-- CONTENT START -->
    @include('layout.header', [
        'title' => 'Egypt Tour Packages | Egypt Sightseeing Tours',
        'breadcrumb' => 'Tour Packages',
        'image' => 'Images/tour-packages-bg.png',
    ])
    <div class="page-content">
        <!--POPULAR DESTINATION SECTION START-->
        <div class="bg-contain bg-[bottom_center] bg-repeat-x xl:pb-22.5 xl:pt-30 pt-12.5">
            <div class="container">
                <div>
                    <div class="grid grid-cols-12 gap-7.5">
                        @forelse($categories as $category)
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 mb-7.5">
                                @include('category::components.category-card')
                            </div>

                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <!--POPULAR DESTINATION SECTION END-->
    </div>
    <!-- CONTENT END -->
@endsection
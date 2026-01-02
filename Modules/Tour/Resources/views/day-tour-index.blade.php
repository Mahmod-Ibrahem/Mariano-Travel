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

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            <!-- SIDEBAR (Left) -->
            <aside class="lg:col-span-3 space-y-8">
                <div class="sticky top-24">
                    <h4 class="text-xl font-bold text-emeraldblue mb-6 border-l-4 border-safety-orange pl-4">Filter by Country</h4>
                    <div class="bg-white rounded-[2rem] border border-gray-100 shadow-lg p-8">
                        <ul class="space-y-4">
                            @foreach($countries as $country)
                                <li>
                                    <a href="{{ route('day-tours.index', ['country' => $country->slug]) }}" 
                                        class="flex items-center justify-between group py-2">
                                        <span class="text-gray-600 font-title group-hover:text-safety-orange transition-colors duration-300">
                                            {{ $country->name }}
                                        </span>
                                        <span class="bg-gray-50 text-gray-400 text-[10px] px-2.5 py-1 rounded-full group-hover:bg-safety-orange/10 group-hover:text-safety-orange transition-all duration-300 font-bold">
                                            {{ $country->categories_count ?? 0 }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </aside>

            <!-- LISTING CONTENT (Right) -->
            <main class="lg:col-span-9">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-8">
                    @forelse($categories as $category)
                        <div class="group relative bg-white rounded-[2.5rem] overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 border border-gray-50 max-h-[550px]">
                            <!-- Image Container -->
                            <div class="relative h-80 overflow-hidden group-hover:cursor-pointer">
                                <a href="{{ route('day-tours.view', $category->slug) }}">
                                <img src="{{ $category->image }}" 
                                     alt="{{ $category->name }}" 
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                </a>
                                
                                <!-- Overlay Gradient -->
                                <div class="absolute inset-0 bg-gradient-to-t from-emeraldblue/90 via-emeraldblue/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>
                                
                                <!-- Listing Count Badge -->
                                <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-md px-4 py-2 rounded-2xl shadow-xl">
                                    <span class="text-secondry font-medium text-sm">{{ $category->tours_count ?? 0 }} Tours</span>
                                </div>
                            </div>

                            <!-- Content Section -->
                            <div class="p-8 text-center relative ">
                                <!-- Floating Icon or Shape (Optional) -->
                                <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-12 h-12 bg-safety-orange rounded-2xl shadow-xl shadow-safety-orange/20 flex 
                                items-center justify-center text-white transform rotate-12 group-hover:rotate-0 transition-transform duration-500">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>

                                <a href="{{ route('day-tours.view', $category->slug) }}" class="text-2xl font-medium  mb-3 mt-2 hover:text-secondry transition-all">
                                    {{ $category->name }}
                                </a>
                                <p class="text-gray-500  text-sm mb-6 line-clamp-2">
                                    {{ $category->description }}
                                </p>
                                
                                <a href="{{ route('day-tours.view', $category->slug) }}" 
                                   class="inline-flex items-center gap-2 text-safety-orange font-medium hover:gap-4 transition-all duration-300 text-sm uppercase tracking-wider">
                                    Explore Tours
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full py-20 text-center">
                            <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fa-solid fa-map-marked-alt text-2xl text-gray-300"></i>
                            </div>
                            <h3 class="text-xl font-bold text-emeraldblue">No tours found</h3>
                            <p class="text-gray-400 mt-2">Try adjusting your filters or check back later.</p>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if(method_exists($categories, 'links'))
                    <div class="mt-16">
                        {{ $categories->links() }}
                    </div>
                @endif
            </main>
        </div>
    </div>

        <!-- CONTENT END -->
    @endsection



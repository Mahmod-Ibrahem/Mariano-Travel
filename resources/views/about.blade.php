@section('title', 'Why Choose Mariano Tours | Local Experts & Tailor-Made Trips')
@section('description', 'Travel Egypt with confidence—custom itineraries, trusted local guides, and seamless planning from start to finish. Choose private or small-group tours and get fast support.')

@extends('layout.layouts')

@section('content')
    @include('layout.header', [
        'title' => 'About Mariano Tours',
        'image' => 'Images/about-bg.jpg',
        'breadcrumb' => 'About us'
    ])

    <div class="relative bg-white overflow-hidden">
        <!-- Decoration elements -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-lightturquoise/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-40 left-0 -ml-20 w-80 h-80 bg-safety-orange/5 rounded-full blur-3xl pointer-events-none"></div>

        <!-- MAIN ABOUT SECTION -->
        <section class="py-16 md:py-24">
            <div class="container mx-auto px-4 relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                    <!-- Image Column -->
                    <div class="w-full lg:w-1/2 flex justify-center">
                        <div class="relative">
                            <div class="absolute -inset-4 bg-lightturquoise/30 rounded-[3rem] blur-2xl -z-10"></div>
                            <div class="bg-white p-4 rounded-[3rem] shadow-2xl border border-gray-50 overflow-hidden">
                                <img src="{{ asset('Images/logo.jpg') }}" alt="Mariano Tours Logo"
                                    class="w-64 md:w-96 h-auto transition-transform duration-700 hover:scale-105" 
                                    width="384" height="384" loading="lazy" style="object-fit: cover;">
                            </div>
                            <!-- Small floating stats or badges could go here for "Senior" feel -->
                            <div class="absolute -bottom-6 -right-6 bg-safety-orange text-white p-6 rounded-3xl shadow-xl shadow-safety-orange/20 hidden md:block">
                                <span class="block text-3xl font-bold">10+</span>
                                <span class="text-xs uppercase tracking-widest font-semibold opacity-90">Years Experience</span>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="w-full lg:w-1/2 space-y-10">
            <div class="space-y-6">
    <h2 class="text-3xl md:text-5xl font-display font-black text-emeraldblue leading-tight">
        We Offer the <span class="text-safety-orange">Best Tours</span> Worldwide
    </h2>
    <p class="text-gray-600 font-title text-lg leading-relaxed">
        Mariano Tours provides carefully curated tours across multiple destinations around the world,
        covering iconic historical, cultural, and natural landmarks.
        From world-famous monuments and ancient sites to vibrant cities and unique experiences,
        we deliver authentic journeys designed for comfort, quality, and unforgettable memories.
    </p>
</div>


                        <!-- Info Cards -->
                        <div class="space-y-6">
                            <!-- Card 1 -->
                            <div class="group flex items-start gap-6 p-6 rounded-3xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition-all duration-300">
                                <div class="flex-shrink-0 w-16 h-16 bg-safety-orange/10 text-safety-orange rounded-2xl flex items-center justify-center">
                                    <img src="{{ asset('assets/images/trv-icon/travel-guide.png') }}" alt="Travel Guide"
                                        class="w-8 h-8 group-hover:invert group-hover:brightness-0 transition-all duration-500" 
                                        style="filter: brightness(0) saturate(100%) invert(12%) sepia(96%) saturate(4615%) hue-rotate(176deg) brightness(92%) contrast(95%)">
                                </div>
                                <div class="space-y-2">
                                    <h4 class="text-xl font-bold text-emeraldblue">Trusted Travel Guide</h4>
                                    <p class="text-gray-500 text-sm font-title leading-relaxed">
                                        Provides reliable information to help travelers plan their trips efficiently and safely.
                                    </p>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="group flex items-start gap-6 p-6 rounded-3xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition-all duration-300">
                                <div class="flex-shrink-0 w-16 h-16 bg-safety-orange/10 text-safety-orange rounded-2xl flex items-center justify-center">
                                    <img src="{{ asset('assets/images/trv-icon/mission-icon.png') }}" alt="Mission & Vision"
                                        class="w-8 h-8 group-hover:invert group-hover:brightness-0 transition-all duration-500"
                                        style="filter: brightness(0) saturate(100%) invert(12%) sepia(96%) saturate(4615%) hue-rotate(176deg) brightness(92%) contrast(95%)">
                                </div>
                                <div class="space-y-2">
                                    <h4 class="text-xl font-bold text-emeraldblue">Mission & Vision</h4>
                                    <p class="text-gray-500 text-sm font-title leading-relaxed">
                                        Our mission is to create meaningful and positive travel experiences that connect people with Egypt’s rich 
                                        history, culture, and beauty through authentic journeys.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES LISTING -->
            @include('page::components.services-listing')
        <!-- TESTIMONIALS -->
        @include('shared::testimonial')
    </div>
@endsection

@section('title', 'Why Choose Mama Coco Egypt Tours | Local Experts & Tailor-Made Trips')
@section('description', 'Travel Egypt with confidence—custom itineraries, trusted local guides, and seamless planning from start to finish. Choose private or small-group tours and get fast support.')
@extends('layout.layouts')
@section('content')
    @include('layout.header', [
        'title' => 'About Mama Coco',
        'image' => 'Images/about-bg.jpg',
        'breadcrumb' => 'About us'
    ])
    <div class="page-content">
        <div class="relative bg-center   w-full bg-white overflow-hidden"
            style="background-image: url({{ asset('Images/about-bg.jpg') }});">
            <div class="opacity-100 absolute left-0 top-0 size-full"></div>

            <div class="xl:pt-30 pt-12.5 bg-white">
                <div class="container">
                    <div class="section-content">
                        <div class="trv-we-recommend2-row">
                            <div class="row flex flex-col md:flex-row justify-between">
                                <div class="flex items-center justify-center my-6 rounded-full">
                                    <img src="{{ asset('Images/logo.jpg') }}" alt="image"
                                        class=" w-60 md:w-96 " width="350" height="350" loading="lazy" style="object-fit: cover;">
                                </div>
                                <div class="lg:w-5/12 w-full">
                                    <div class="xl:mb-30 mb-7.5 relative">
                                        <!-- TITLE START-->
                                        <div class="sm:mb-15 mb-7.5">
<h2 class="xl:text-46 md:text-40 text-3xl mb-3.5">
    We Offer the <span class="text-citrusyellow">Best Tours</span> in Egypt
<div class="lg:mb-12.5 mb-7.5 2xl:pr-8.75 text-base">
    Mama Coco Travelling Company provides carefully curated tours across Egypt,
    covering the country’s most iconic historical and cultural landmarks.
    From the Great Pyramids and ancient temples to museums and heritage sites,
    we deliver authentic experiences designed for comfort, quality, and unforgettable memories.
</div>
                                        </div>
                                        <!-- TITLE END-->

                                        <div class="mb-12.5">

                                            <div
                                                class="flex items-center xl:max-w-104 max-w-full py-3.75 px-10 bg-white border border-primary/10 rounded-2xl mb-5">
                                                <div
                                                    class="bg-no-repeat size-13.75 min-w-13.75 bg-size-[100%] mr-7.5 flex items-center justify-center">
                                                    <span><img src="assets/images/trv-icon/travel-guide.png" alt="#"
                                                            class="image-filter-2 max-w-12"
                                                            style="filter: brightness(0) saturate(100%) invert(12%) sepia(96%) saturate(4615%) hue-rotate(176deg) brightness(92%) contrast(95%)"
                                                            width="48" height="49" loading="lazy"></span>
                                                </div>
                                                <div>
                                                    <h4 class="text-2xl text-primary font-medium mb-3">Trusted
                                                        travel
                                                        guide</h4>
                                                    <p class="">Provides reliable information to help travelers
                                                        plan their trips efficiently and safely.</p>
                                                </div>
                                            </div>
                                            <div
                                                class="flex items-center xl:max-w-104 max-w-full py-3.75 px-10 bg-white border border-primary/10 rounded-2xl mb-5">
                                                <div
                                                    class="bg-no-repeat size-13.75 min-w-13.75 bg-size-[100%] mr-7.5 flex items-center justify-center">
                                                    <span><img src="assets/images/trv-icon/mission-icon.png" alt="#"
                                                            class="image-filter-2 max-w-12"
                                                            style="filter: brightness(0) saturate(100%) invert(12%) sepia(96%) saturate(4615%) hue-rotate(176deg) brightness(92%) contrast(95%)"
                                                            width="48" height="49" loading="lazy"></span>
                                                </div>
                                                <div>
                                                    <h4 class="text-2xl text-primary font-medium mb-3">Mission &
                                                        Vision
                                                    </h4>
                                                    <p class="">Our mission is to create meaningful and positive travel experiences that connect people with Egypt’s rich 
                                                        history, culture, and beauty. We aim to help travelers see the world differently by delivering authentic journeys, 
                                                        exceptional service, and unforgettable moments through travel.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--WE RECOMMEND SECTION END-->
            @include('components.services')
            @include('shared::testimonial')
        </div>
        <!-- CONTENT END -->
    </div>
@endsection

@extends('layout.layouts')
@section('title')
    {{ $tour->title }}
@endsection
@section('description')
    {{ $tour->description }}
@endsection
@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        @include('layout.header',[
    'title'=>$tour->title,
    'image'=>$tour->tour_cover,
    'breadcrumb'=>$tour->title
])

        <!-- SECTION START -->
        <div class="section-full lg:pt-28 pt-12 lg:pb-24 pb-5">
            <div class="container mx-auto">

                <!-- BLOG SECTION START -->
                <div class="section-content">
                    <div class="row flex flex-col-reverse md:flex-row mx-2 md:mx-auto justify-center">

                        <!-- SIDE BAR START -->
                        <div class="lg:w-1/3 w-full mb-8">

                            <aside
                                class="lg:mr-2 md:p-7 p-5 box-border bg-white border border-gray-200 rounded-3xl my-sticky space-top-0 shadow-lg hover:shadow-xl transition-shadow duration-300">
                                @include('tour::components.booking-form')
                            </aside>

                        </div>

                        <div class="lg:w-2/3 w-full mb-8">
                            <div class="trv-detail-main-wrap">

                                <!--Info Start-->
                                <div class="rounded-3xl p-5 sm:p-8 bg-white shadow-md border border-gray-100 mb-8">

                                    <div
                                        class="flex items-start justify-between flex-wrap border-b border-gray-200 pb-5 mb-8">
                                        <ul class="max-w:w-full flex flex-wrap">
                                            <li
                                                class="text-base font-normal text-[#545454] leading-[1.4] md:mr-6 mr-[2%] mb-4 max-xl:w-[31%] max-md:!w-[48%] flex items-start gap-3">
                                                <div class="min-w-[24px] mt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-secondry">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <span class="text-lg text-primary font-bold font-title block mb-1">Location</span>
                                                    @foreach ($tour->locations as $location)
                                                        <span class="block">{{ $location->name }}</span>
                                                    @endforeach
                                                </div>
                                            </li>
                                            <li
                                                class="text-base font-normal text-[#545454] leading-[1.4] lg:mr-6 mr-[2%] mb-4 max-xl:w-[31%] max-md:!w-[48%] flex items-start gap-3">
                                                <div class="min-w-[24px] mt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-secondry">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a22.5 22.5 0 0 0 5.25-5.25c.542-.826.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <span class="text-lg text-primary font-bold font-title block mb-1">Tour Type</span>
                                                    {{ $tour->group === 'tour-packages' ? 'Tour Packages' : 'Day Tour' }}
                                                </div>
                                            </li>

                                            @if($tour->country)
                                            <li
                                                class="text-base font-normal text-[#545454] leading-[1.4] lg:mr-6 mr-[2%] mb-4 max-xl:w-[31%] max-md:!w-[48%] flex items-start gap-3">
                                                <div class="min-w-[24px] mt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-secondry">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21.812 8.716M12 10.5a11.956 11.956 0 0 0 7.857-1.127m-15.714 0A11.956 11.956 0 0 1 12 10.5M3 14.25a12.036 12.036 0 0 1 1.134-4.886m15.732 0A12.036 12.036 0 0 1 21 14.25M6 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <span class="text-lg text-primary font-bold font-title block mb-1">Country</span>
                                                    {{ $tour->country->name ?? '' }}
                                                </div>
                                            </li>
                                            @endif
                                            
                                            <!-- Top Info List Item -->
                                            <li
                                                class="text-sm font-normal text-[#545454] leading-[1.4] lg:mr-10 mr-[2%] mb-2.5 max-xl:w-[31%] max-md:!w-[48%] bg-secondry/10 rounded-2xl p-4 shadow-sm">
                                                <div class="font-title text-base font-normal text-heading leading-[1.4]">
                                                    @if($tour->is_bookable)
                                                    <span
                                                        class="text-3xl font-black text-secondry leading-tight mb-1 block">$
                                                        {{ $tour->price_six_twenty }}
                                                    </span>
                                                    <span class="text-lg text-primary font-bold font-title block mb-1">Per Person</span>
                                                    @else
                                                    <span
                                                        class="text-3xl font-black text-secondry leading-tight mb-1 block">Price upon request
                                                    </span>
                                                    @endif
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="mb-8">
                                        <h3 class="md:text-4xl text-3xl leading-tight mb-5 text-primary">{{ $tour->title }}</h3>
                                        <p class="text-base mb-4">{{ $tour->description }}</p>
                                        <!--Top SLider-->
                                        <div class="mb-6">
                                            <div class="swiper trv_d-slider">
                                                <div class="swiper-wrapper">
                                                    @foreach ($tour->images as $image)
                                                        <div class="swiper-slide">
                                                            <div class="trv_d-slider-media">
                                                                <img src="{{ asset($image->path) }}" alt="Image"
                                                                    class="rounded-3xl shadow-md hover:shadow-lg transition-shadow duration-300" width="1000" height="388" loading="lazy">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="text-3xl leading-tight mb-6 text-primary">Highlights & Attractions</h4>

                                    <!-- Enhanced highlights section with shadow, improved background color, and border -->
                                    <!-- Enhanced highlights section with bg-secondry and text-white -->
                                    <div class="bg-secondry rounded-3xl p-10 mb-10 shadow-lg shadow-secondry/20 hover:shadow-xl transition-all duration-300 relative overflow-hidden group">
                                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full translate-x-1/3 -translate-y-1/3 blur-3xl group-hover:bg-white/20 transition-colors duration-500"></div>
                                        <div class="absolute bottom-0 left-0 w-48 h-48 bg-black/5 rounded-full -translate-x-1/3 translate-y-1/3 blur-2xl"></div>
                                        
                                        <ul class="trv-list-st-1 relative z-10">
                                            <li class="prose prose-p:text-lg prose-p:text-white prose-p:leading-relaxed prose-li:text-white marker:text-white">
                                                {!! $tour->highlights !!}
                                            </li>
                                        </ul>
                                    </div>


                                    <h4 class="text-3xl leading-tight mb-6 text-primary">Includes & Not Includes</h4>
                                    <div class="bg-primary rounded-3xl p-10 pb-4 mb-10 shadow-xl shadow-primary/20 relative overflow-hidden">
                                        <!-- Decorative background svg or shape -->
                                        <div class="absolute top-0 right-0 p-10 opacity-5 pointer-events-none">
                                            <i class="fa-solid fa-plane-departure text-9xl text-white"></i>
                                        </div>

                                        <div class="row relative z-10">
                                            <div class="lg:w-1/2 w-full">
                                                <ul class="mb-8">
                                                    @forelse ($tour->inclusions as $include)
                                                        <li
                                                            class="md:text-lg text-base font-medium leading-tight text-white relative pl-10 mb-4 flex items-start">
                                                            <i
                                                                class="fa-solid fa-circle-check absolute text-2xl text-secondry left-0 top-0.5"></i>
                                                            <span class="opacity-90">{{ $include->title }}</span>
                                                        </li>
                                                    @empty
                                                        <li
                                                            class="md:text-lg text-base font-medium leading-tight text-white relative pl-10 mb-4">
                                                            <i
                                                                class="fa-solid fa-circle-check absolute text-2xl text-secondry left-0 top-0.5"></i>
                                                            <span class="opacity-90">Not Specified</span>
                                                        </li>
                                                    @endforelse
                                                </ul>
                                            </div>
                                            <div class="lg:w-1/2 w-full">
                                                <ul class="mb-8">
                                                    @forelse ($tour->exclusions as $exclude)
                                                        <li
                                                            class="md:text-lg text-base font-medium leading-tight text-white relative pl-10 mb-4 flex items-start">
                                                            <i
                                                                class="fa-solid fa-circle-xmark absolute text-2xl text-gray-400 left-0 top-0.5"></i>
                                                            <span class="opacity-80">{{ $exclude->title }}</span>
                                                        </li>
                                                    @empty
                                                        <li
                                                            class="md:text-lg text-base font-medium leading-tight text-white relative pl-10 mb-4">
                                                            <i
                                                                class="fa-solid fa-circle-xmark absolute text-2xl text-gray-400 left-0 top-0.5"></i>
                                                            <span class="opacity-80">Not Specified</span>
                                                        </li>
                                                    @endforelse
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="text-3xl leading-tight mb-6 text-primary">Tour Itinerary</h4>
                                    <!-- Enhanced itinerary section with shadow, gradient background, and subtle border -->
                                    <!-- Enhanced itinerary section with bg-slate-50 -->
                                    <div class="bg-slate-50 rounded-3xl p-10 pb-4 mb-10 shadow-sm border border-gray-100">
                                        <ul class="trv-list-st-3">
                                            @forelse ($tour->itenaries as $itenary)
                                                <li class="mb-8">
                                                    <div class="sm:flex">
                                                        <div class="text-center">
                                                            <div
                                                                class="w-12 h-12 bg-secondry rounded-full flex items-center justify-center sm:mb-1 max-sm:mx-auto shadow-sm">
                                                                <div
                                                                    class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white text-xl font-bold font-title">
                                                                    {{ $loop->iteration }}
                                                                </div>
                                                            </div>
                                                            {{-- <span
                                                                class="inline-block text-sm font-semibold max-sm:mx-2.5">DAY</span>
                                                            --}}
                                                        </div>
                                                        <div class="sm:w-[calc(100%_-_46px)] w-full sm:px-5 max-sm:text-center">
                                                            <h4 class="md:text-2xl text-2xl mb-4 text-primary">{{ $itenary->title }}</h4>

                                                            {!! $itenary->description !!}
                                                        </div>
                                                    </div>
                                                </li>
                                            @empty
                                            @endforelse
                                        </ul>
                                    </div>
                                    @include('tour::components.tour-video')
                                    @include('tour::components.pricing-details')
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- SECTION END -->


    </div>
    <!-- CONTENT END -->
@endsection('content')

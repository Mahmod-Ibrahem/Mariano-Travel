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
        <div class="section-full xl:pt-30 pt-12.5 xl:pb-22.5 pb-5">
            <div class="container">

                <!-- BLOG SECTION START -->
                <div class="section-content">
                    <div class="row flex justify-center">

                        <!-- SIDE BAR START -->
                        <div class="lg:w-1/3 w-full mb-7.5">

                            <aside
                                class="lg:mr-2.5 xl:p-7.5 p-5 box-border bg-white border border-primary/20 rounded-3xl my-sticky space-top-0">
                                <!-- Booking Form Start -->
                                @include('tour::components.booking-form')
                                <!--Booking Form End -->
                            </aside>

                        </div>

                        <div class="lg:w-2/3 w-full mb-7.5">
                            <div class="trv-detail-main-wrap">

                                <!--Info Start-->
                                <div class="rounded-3xl p-5 sm:p-7.5 bg-white">

                                    <div
                                        class="flex items-start justify-between flex-wrap border-b border-primary/20 pb-5 mb-7.5">
                                        <ul class="max-xl:w-full flex flex-wrap">
                                            <li
                                                class="text-sm font-normal text-[#545454] leading-[1.4] xl:mr-10 mr-[2%] mb-2.5 max-xl:w-[31%] max-md:!w-[48%]">
                                                <span
                                                    class="text-xl text-primary font-bold font-title block">Location</span>
                                                @foreach ($tour->locations as $location)
                                                    {{ $location->name }}
                                                @endforeach
                                            </li>
                                            <li
                                                class="text-sm font-normal text-[#545454] leading-[1.4] xl:mr-10 mr-[2%] mb-2.5 max-xl:w-[31%] max-md:!w-[48%]">
                                                <span class="text-xl text-primary font-bold font-title block">Tour
                                                    Type</span>
                                                {{ $tour->group === 'tour-packages' ? 'Tour Packages' : 'Day Tour' }}

                                            </li>
                                            <li
                                                class="text-sm font-normal text-[#545454] leading-[1.4] xl:mr-10 mr-[2%] mb-2.5 max-xl:w-[31%] max-md:!w-[48%]">
                                                <div class="font-title text-base font-normal text-heading leading-[1.4]">
                                                    <span
                                                        class="text-28 font-black text-citrusyellow leading-[1.2] mb-1.25 block">$
                                                        {{ $tour->price_six_twenty }}
                                                    </span>
                                                    Per Person
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mb-7.5">
                                        <h3 class="md:text-4xl text-28 leading-[1.2] mb-5">{{ $tour->title }}</h3>
                                        <p class="text-base mb-4">{{ $tour->description }}</p>
                                        <!--Top SLider-->
                                        <div class="mb-6.25">
                                            <div class="swiper trv_d-slider">
                                                <div class="swiper-wrapper">
                                                    @foreach ($tour->images as $image)
                                                        <div class="swiper-slide">
                                                            <div class="trv_d-slider-media">
                                                                <img src="{{ asset($image->path) }}" alt="Image"
                                                                    class="rounded-3xl" width="796" height="388" loading="lazy">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="text-28 leading-[1.2] mb-6.25">Highlights & Attractions</h4>

                                    <div class="bg-eggshell rounded-3xl p-10 mb-10">
                                        <ul class="trv-list-st-1">
                                            <li class="prose prose-p:text-base prose-p:text-[#066168] prose-p:leading-[1.2]">
                                                {!! $tour->highlights !!}
                                            </li>
                                        </ul>
                                    </div>


                                    <h4 class="text-28 leading-[1.2] mb-6.25">Includes & Not Includes</h4>
                                    <div class="bg-eggshell rounded-3xl p-10 pb-2.5 mb-10">
                                        <div class="row">
                                            <div class="lg:w-1/2 w-full">
                                                <ul class="mb-7.5">
                                                    @forelse ($tour->inclusions as $include)
                                                        <li
                                                            class="md:text-lg text-base font-normal leading-[1.2] text-primary relative pl-11.25 mb-4.5">
                                                            <i
                                                                class="fa-solid fa-circle-check absolute text-2xl text-[#85D200] left-0 -top-0.75"></i>
                                                            {{ $include->title }}
                                                        </li>
                                                    @empty
                                                        <li
                                                            class="md:text-lg text-base font-normal leading-[1.2] text-primary relative pl-11.25 mb-4.5">
                                                            <i
                                                                class="fa-solid fa-circle-check absolute text-2xl text-[#85D200] left-0 -top-0.75"></i>
                                                            Not Specified
                                                        </li>
                                                    @endforelse
                                                </ul>
                                            </div>
                                            <div class="lg:w-1/2 w-full">
                                                <ul class="mb-7.5">
                                                    @forelse ($tour->exclusions as $exclude)
                                                        <li
                                                            class="md:text-lg text-base font-normal leading-[1.2] text-primary relative pl-11.25 mb-4.5">
                                                            <i
                                                                class="fa-solid fa-circle-xmark absolute text-2xl text-[#cacaca] left-0 -top-0.75"></i>
                                                            {{ $exclude->title }}
                                                        </li>
                                                    @empty
                                                        <li
                                                            class="md:text-lg text-base font-normal leading-[1.2] text-primary relative pl-11.25 mb-4.5">
                                                            <i
                                                                class="fa-solid fa-circle-xmark absolute text-2xl text-[#cacaca] left-0 -top-0.75"></i>
                                                            Not Specified
                                                        </li>
                                                    @endforelse
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                    <h4 class="text-28 leading-[1.2] mb-6.25"> Tour itinerary</h4>
                                    <div class="bg-eggshell rounded-3xl p-10 pb-2.5 mb-10">
                                        <ul class="trv-list-st-3">
                                            @forelse ($tour->itenaries as $itenary)
                                                <li class="mb-7.5">
                                                    <div class="sm:flex">
                                                        <div class="text-center">
                                                            <div
                                                                class="size-11.5 bg-citrusyellow rounded-5xl flex items-center justify-center sm:mb-1.25 max-sm:mx-auto">
                                                                <div
                                                                    class="size-9.5 bg-primary rounded-5xl flex items-center justify-center text-white text-22 font-bold font-title">
                                                                    {{ $loop->iteration }}
                                                                </div>
                                                            </div>
                                                            {{-- <span
                                                                class="inline-block text-sm font-semibold max-sm:mx-2.5">DAY</span>
                                                            --}}
                                                        </div>
                                                        <div class="sm:w-[calc(100%_-_46px)] w-full sm:px-5 max-sm:text-center">
                                                            <h4 class="md:text-2xl text-2xl mb-3.75">{{ $itenary->title }}</h4>

                                                            {!! $itenary->description !!}
                                                        </div>
                                                    </div>
                                                </li>
                                            @empty
                                            @endforelse
                                        </ul>
                                    </div>
                                    @if($tour->video_url)
                                        <h4 class="text-28 leading-[1.2] mb-6.25">Video</h4>
                                        <div class="rounded-3xl overflow-hidden relative mb-10">
                                            <img src="{{ $tour->tour_cover }}" alt="Image"
                                                class="object-cover object-center h-115 rounded-3xl w-full" width="796"
                                                height="460" loading="lazy">
                                            <a href="{{ $tour->video_url }}" class="popup-youtube play-now-video">
                                                <i class="icon fa fa-play"></i>
                                                <span class="ripple"></span>
                                            </a>
                                        </div>
                                    @endif
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

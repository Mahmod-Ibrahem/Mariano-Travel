<!--TESTIMONIAL START-->
<div class="parent_container bg-center bg-no-repeat bg-lightturquoise relative py-16 md:py-24"
    style="background-image: url(assets/images/Map.png);">
    <div class="container">

        <!-- TITLE START-->
        <div class="mb-10 lg:mb-16">
            <h2 class="section-header">Our Client <span class="text-safety-orange">Says!</span></h2>
            <div class="text-center text-gray-500 mt-2 font-title text-lg">What our wonderful travelers are saying about
                us</div>
        </div>
        <!-- TITLE END-->

        <div class="section-content">

            <div class="relative group testimonial-slider-wrap">
                <div class="swiper trv-t-monial-swiper !pb-12">
                    <div class="swiper-wrapper">
                        <!--BOX-1-->
                        @foreach ($reviews as $review)
                            <div class="swiper-slide !h-auto">
                                <div
                                    class="bg-white rounded-3xl shadow-lg p-6 md:p-10 mx-4 my-8 transition-transform duration-300 hover:scale-[1.02] border border-gray-100 min-h-[350px] md:min-h-[400px] flex flex-col justify-center">
                                    <div class="flex flex-col md:flex-row gap-8 items-center md:items-start">
                                        <div class="reviewer-image relative shrink-0">
                                            <div class="w-32 h-32 md:w-40 md:h-40 rounded-2xl overflow-hidden shadow-md">
                                                <img src="{{ asset('assets/images/tripadvisor-logo.png') }}"
                                                    alt="{{ $review->reviewer }}" class="w-full h-full object-cover">
                                            </div>
                                        </div>

                                        <div class="reviewer-info flex-1 text-center md:text-left">
                                            <div
                                                class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-4">
                                                <div>
                                                    <h4
                                                        class="text-2xl md:text-3xl font-bold text-emeraldblue font-display leading-tight">
                                                        {{ $review->reviewer }}
                                                    </h4>
                                                    <span
                                                        class="text-safety-orange font-title font-semibold tracking-wide text-sm md:text-base uppercase">
                                                        {{ $review->title }}
                                                    </span>
                                                </div>
                                                <div class="hidden md:block">
                                                    <img src="assets/images/trv-icon/Quote.png" class="w-10 opacity-20"
                                                        alt="quote">
                                                </div>
                                            </div>

                                            <div class="flex items-center justify-center md:justify-start gap-1 mb-4">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fa-solid fa-star text-secondry text-sm"></i>
                                                @endfor
                                            </div>

                                            <p
                                                class="text-gray-600 font-title text-base md:text-lg leading-relaxed italic line-clamp-4">
                                                "{{ $review->content }}"
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Custom Navigation Buttons --}}
                    <div class="flex items-center justify-center gap-6 mt-4">
                        <div
                            class="testi-button-prev size-12 rounded-full text-secondry hover:bg-secondry hover:text-white
                             transition-all duration-300 flex items-center justify-center cursor-pointer shadow-lg hover:shadow-safety-orange/20 -translate-y-2">
                            <i class="fa-solid fa-chevron-left text-sm"></i>
                        </div>
                        <div
                            class="testi-button-next size-12 rounded-full text-secondry hover:bg-secondry hover:text-white transition-all duration-300 flex items-center justify-center cursor-pointer shadow-lg hover:shadow-safety-orange/20 -translate-y-2">
                            <i class="fa-solid fa-chevron-right text-sm"></i>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--TESTIMONIAL END-->
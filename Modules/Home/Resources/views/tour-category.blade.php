<!--TOUR CATEGORY SECTION START-->
<div class="mx-auto pt-12 pb-5  relative bg-cover" style="background-image: url(Images/hero-bg.jpg);">
    <div class="lg:flex items-center mx-auto w-full lg:mb-16 sm:mb-0 mb-8 px-8" id="module">
        <div class="flex justify-center items-start flex-col flex-1 max-w-md lg:mr-32 trv-feature max-lg:mb-5">
            <h2 class="xl:text-5xl md:text-4xl text-3xl mb-3 text-secondry font-bold"></h2>
            <p class="text-base relative sm:mb-12 mb-5 text-primary font-medium"></p>
        </div>
        <div class="swiper max-w-5xl trv-tr-cat-swiper flex-grow-[2] sm:!pl-8">
            <div class="swiper-wrapper">
                @foreach($categories as $category)
                    <div class="trv-cat-sld swiper-slide text-center flex justify-center
                                                                    items-center rotate-[3deg] scale-[0.8] duration-500 relative overflow-hidden"
                        data-title="{{ $category->name }}" data-description="{{ $category->description }}"
                        data-title-color="text-secondry" data-description-color="text-primary/75">
                        <div class="rounded-3xl p-4 bg-white overflow-hidden">
                            <img src="{{ $category->image }}" alt="Image"
                                class="w-full h-[250px] md:h-[350px] block object-center object-cover rounded-xl"
                                loading="lazy">
                            <h3 class="text-2xl font-medium mt-3"><a href="tour-detail.html"
                                    class="text-primary duration-500">{{ $category->name }}</a></h3>
                        </div>
                    </div>
                @endforeach
            </div>
            <div
                class="swiper-button-next !w-14 !h-14 !flex !items-center !justify-center !opacity-100 rounded-full bg-secondry !text-white hover:!text-travco-red hover:!bg-white after:!text-xl transition-all duration-300">
            </div>
            <div
                class="swiper-button-prev !w-14 !h-14 !flex !items-center !justify-center !opacity-100 rounded-full bg-secondry !text-white hover:!text-travco-red hover:!bg-white after:!text-xl transition-all duration-300">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="relative text-right z-1">
            <span
                class="text-white font-title not-italic md:font-bold font-medium md:text-3xl text-xl opacity-90">Wonderful
                Place
                For You</span>
            <h2
                class="font-black lg:text-8xl sm:text-5xl text-3xl leading-none uppercase text-secondry !font-base tracking-tighter">
                Tour Categories</h2>
        </div>
    </div>
</div>
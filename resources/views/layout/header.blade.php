<section class="header-section" style="background-image: url('{{asset($image)}}')">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="w-full h-full inline-flex items-center justify-center">
        <h3 class="header-title">
            {{ $title }}
        </h3>
    </div>


    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block">
                <a href="{{ route('home') }}"
                    class="uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                    Home
                </a>

                <span class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                    <i class="mdi mdi-chevron-right"></i>
                </span>
            </li>

            <li class="inline-block">
                <span class="uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">
                    {{ $breadcrumb ?? '' }}
                </span>
            </li>
        </ul>
    </div>

</section>
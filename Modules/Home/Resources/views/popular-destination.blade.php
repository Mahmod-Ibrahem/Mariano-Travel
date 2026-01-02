<section id="Best Destination">
    <div class="flex flex-col md:flex-row items-center  md:justify-between mx-6 flex-nowrap   mt-6 md:my-12">
        <div class="flex flex-col">
            <div class="hidden md:flex">
                <div id="prev" class="cursor-pointer group">
                    <div class="rounded-full transition-all duration-300">
                        <svg class="h-8 w-8 text-secondry group-hover:text-primary transition-all" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 8 8 12 12 16" />
                            <line x1="16" y1="12" x2="8" y2="12" />
                        </svg>
                    </div>
                </div>

                <div id="next" class="cursor-pointer md:mb-2 group">
                    <div class="rounded-full transition-all duration-300">
                        <svg class="h-8 w-8 text-secondry group-hover:text-primary transition-all" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 16 16 12 12 8" />
                            <line x1="8" y1="12" x2="16" y2="12" />
                        </svg>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-5xl font-bold text-primary text-center md:text-start mb-3">Explore <span
                    class="text-secondry">Best
                    Destination</span>
            </h2>
            <p class="text-primary max-w-[330px] select-none 
                 md:mb-12
                 font-medium text-lg">
                Discover the best tours based on your destination—whether in Egypt or beyond—carefully designed to match
                each place’s unique highlights and experiences.</p>
        </div>
        <div id="TrendCard" class="grid grid-flow-col auto-cols-[100%] md:auto-cols-[25%] gap-6 md:gap-7
         w-full py-8 overflow-x-auto scroll-smooth hide-scrollbar
         snap-x snap-mandatory">
            @foreach ($countries as $country)
                @include('location::components.destination-card')
            @endforeach
        </div>


        <div class=" gap-2 flex md:hidden mt-5 justify-center">
            <div id="sm_prev" class="cursor-pointer group">
                <div
                    class="p-3 rounded-full border border-travco-border transition-all duration-300 active:bg-travco-red active:text-white">
                    <svg class="h-6 w-6 text-travco-navy" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 8 8 12 12 16" />
                        <line x1="16" y1="12" x2="8" y2="12" />
                    </svg>
                </div>
            </div>

            <div id="sm_next" class="cursor-pointer group">
                <div
                    class="p-3 rounded-full border border-travco-border transition-all duration-300 active:bg-travco-red active:text-white">
                    <svg class="h-6 w-6 text-travco-navy " viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 16 16 12 12 8" />
                        <line x1="8" y1="12" x2="16" y2="12" />
                    </svg>
                </div>
            </div>
        </div>

    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const TrendCard = document.getElementById("TrendCard");
        const Next = document.getElementById('next')
        const Prev = document.getElementById('prev')
        const sm_prev = document.getElementById('sm_prev')
        const sm_next = document.getElementById('sm_next')
        Next.addEventListener('click', () => ScrollHorizontal(1))
        Prev.addEventListener('click', () => ScrollHorizontal(-1))
        sm_prev.addEventListener('click', () => ScrollHorizontal(-1))
        sm_next.addEventListener('click', () => ScrollHorizontal(1))

        function ScrollHorizontal(sign) {
            // Card width (18rem/17rem) + gap (space-x-7/space-x-6)
            // Desktop: 18rem (288px) + 1.75rem (28px) = 316px
            // Mobile: 17rem (272px) + 1.5rem (24px) = 296px
            if (window.innerWidth >= 768) {
                TrendCard.scrollLeft += 316 * sign;
            } else {
                TrendCard.scrollLeft += 296 * sign;
            }
        }

    });

</script>
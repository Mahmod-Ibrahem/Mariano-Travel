<!--POPULAR DESTINATION SECTION START-->
<div
    class="relative overflow-hidden md:pb-22.5 pb-10 md:pt-30 pt-17.5 bg-contain bg-[bottom_center] bg-repeat-x bg-[url(../images/background/Cloud-bg.png)]">
    <div class="container">
        <!-- TITLE START-->
        <div class="text-center max-w-150 mx-auto md:mb-15 mb-7.5">
            <h2 class="xl:text-46 md:text-40 text-3xl mb-2.5"><span class="text-citrusyellow">Popular
                </span>Destination</h2>
            <p class="text-base">Explore the best tours based on your chosen destination</p>
            <div class="-mt-7">
                <img src="{{ asset('assets/images/background/Title-Separator.png') }}" alt="Image"
                    class="w-117.5 inline-block" width="470" height="70">
            </div>
        </div>
        <!-- TITLE END-->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6 max-w-7xl mx-auto py-6">
            @forelse($locations as $location)
                @include('location::components.destination-card')
            @empty
            @endforelse
        </div>
    </div>
    <div class="absolute -left-28.75 top-2/5 w-57.5 opacity-50 animate-slide-top2"><img
            src="{{ asset('assets/images/hotballon-Left.png') }}" alt="image" width="233" height="333">
    </div>
    <div class="absolute -right-13.75 top-2/5 w-27.5 animate-slide-top"><img
            src="{{ asset('assets/images/hotballon-right.png') }}" alt="image" width="110" height="166">
    </div>
</div>
<!--POPULAR DESTINATION SECTION END-->
<!--POPULAR TOUR SECTION START-->
<div class="relative overflow-hidden z-1 pb-5 bg-fit bg-no-repeat bg-top mx-1"
    style="background-image: url('{{ asset('Images/background/title-bg-recommended-1.jpg') }}');">
    <!-- TITLE START-->
    <div class="mt-14 pt-3">
        <h2 class="section-header">Recommended Tours</h2>
        <!-- TITLE END-->
        <!-- Tour Listing -->
        <div class="parent_container md:mt-12 ">
            <div class="child_container">
                @forelse($popularTours as $tour)
                    @include('tour::components.tour-card', compact('tour'))
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <!-- End of Tour Listing -->
</div>
<!--POPULAR TOUR SECTION END-->
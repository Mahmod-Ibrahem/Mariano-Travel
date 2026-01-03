<div
    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:max-w-7xl mx-auto py-6 place-items-center md:place-items-stretch">
    @forelse($tours as $tour)
        @include('tour::components.tour-card', compact('tour'))
    @empty
        <div class="col-span-full py-20 text-center">
            <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fa-solid fa-map-marked-alt text-2xl text-gray-300"></i>
            </div>
            <h3 class="text-xl font-bold text-emeraldblue">No tours found</h3>
            <p class="text-gray-400 mt-2">Try adjusting your filters or check back later.</p>
        </div>
    @endforelse
</div>
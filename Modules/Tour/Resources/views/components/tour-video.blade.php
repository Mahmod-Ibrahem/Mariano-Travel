@if($tour->video_url)
    <h4 class="text-3xl leading-tight mb-6 text-primary">Video</h4>
    <!-- Enhanced video section with shadow and hover effect -->
    <div class="gap-5 md:my-12 flex flex-wrap justify-center">
        <iframe class=" aspect-video" loading="lazy" src="{{ $tour->video_url }}" title="Visiting Tomb video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
@endif
@section('title')
Egypt Travel Blog | Guides, Tips & Things to Do
@endsection
@section('description')
Travel smarter with Egypt guides, itineraries, and tips—Cairo, Luxor, Aswan, Nile cruises, and Red Sea ideas. Plan your trip with confidence.
@endsection
@extends('layout.layouts')
@section('content')
@include('layout.header',[
    'title'=>'Egypt Adventure Tours and Travel Tips Discover Egypt Your Way',
    'breadcrumb'=>'Blogs',
    'image'=>'Images/blog-bg.jpg',
])
    <div class="page-content">
        <!--EXPLORE POPULAR TOUR START-->
        <div class="section-full trv-blog-grid-inner xl:pt-30 pt-12.5 xl:pb-22.5 pb-5">
            <div class="container">

                <div class="section-content">

                    <div class="trv-blog-grid-inner-row">
                        <div class="row">
                            @forelse($blogs as $blog)
                                @include('blog::components.blog-card')
                            @empty
                            @endforelse
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--EXPLORE POPULAR TOUR END-->

    </div>
@endsection
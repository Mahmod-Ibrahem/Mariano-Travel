@extends('layout.layouts')
@section('content')
@include('layout.header',[
    'title' => 'Our Services',
    'breadcrumb' => 'Services',
    'image' => asset('Images/services-bg.jpg'),
])
    <!-- SERVICES SECTION START -->
    <section class="py-16 md:py-24 bg-white relative overflow-hidden">
        <!-- Optional Background Element similar to Testimonial -->
        <div
            class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-lightturquoise/20 rounded-full blur-3xl opacity-50 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-safety-orange/10 rounded-full blur-3xl opacity-50 pointer-events-none">
        </div>

        @include('page::components.services-listing')
    </section>
    <!-- SERVICES SECTION END -->
    @include('contact::contact-form')
@endsection
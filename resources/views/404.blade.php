@extends('layout.layouts')
@section('content')
    <div class="page-content">

        <!-- Error SECTION START -->
        <div class="xl:pt-30 pt-12.5 xl:pb-50 pb-5 bg-[url({{ asset('assets/images/error-bg-cloud.png') }})] bg-no-repeat bg-[center_bottom]">
            <div class="container">
                <div>
                    <div class="text-center lg:flex items-center justify-between">
                        <div class="mb-7.5">
                            <span
                                class="font-title xl:text-40 text-2xl font-bold text-primary text-left block leading-none">Oops!</span>
                            <h1
                                class="!font-base xl:!text-50xxl !text-35xl !font-bold text-primary text-shadow-[0px_26px_10px_rgba(6,97,104,0.26)] leading-[0.75] flex items-center justify-center">
                                4
                                <img src="{{ asset('assets/images/hotballon-error.png') }}" alt="Image"
                                    class="xl:max-w-43 max-w-30 mb-5 animate-error-ballonanimation w-full" width="172"
                                    height="258" loading="lazy">4
                            </h1>
                            <div class="pt-2.5 p-7.5 relative max-w-132.5 max-lg:mx-auto">
                                <h2 class="text-36 mb-5">Page Not Found</h2>
                                <p class="text-lg mb-7.5">The page you're looking for isn't available. Try to search
                                    again or use the go to. </p>
                                <a href="{{ route('home') }}" class="site-button">Back to Home</a>
                            </div>
                        </div>
                        <div class="lg:max-w-167.5 max-w-100 lg:pl-5 max-lg:mx-auto mb-7.5">
                            <img src="{{ asset('assets/images/error-bg.png') }}" alt="img" width="650" height="697"
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
@endsection
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Character Encoding -->
    <meta charset="UTF-8">

    <!-- Responsive Design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>@yield('title')</title>

    <meta name="title" content="@yield('title')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Mariano Tours">
    <meta name="robots" content="index, follow">

    <!-- CANONICAL URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/png" href="{{ asset('Images/logo.jpg') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Mariano Tours">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="{{ asset('Images/logo.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Mariano Tours">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mariano Tours">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="{{ asset('Images/logo.jpg') }}">

    <!-- IE Compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/flaticon/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/feather/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/css/flatpicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lc_lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">
    @vite('resources/css/app.css')
    <!-- style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=Figtree:ital,wght@0,300..900;1,300..900&family=Kaushan+Script&display=swap"
        rel="stylesheet">

</head>

<body class="selection:bg-[#484848] selection:text-white font-title">
    {{-- @component('layout.ContactNav')
    @endcomponent --}}
    @include('layout.navbar')

    @yield('content')
    @include('layout.footer')

    @vite('resources/js/app.js')
    <script src="{{ asset('assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/flatpickr/js/flatpickr.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script> --}}
    {{-- <script src=" {{ asset('assets/js/theia-sticky-sidebar.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script>
    {{-- <script src=" {{ asset('assets/js/lc_lightbox.lite.js') }}"></script> --}}
    {{--
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script> --}}
    {{--
    <script src="{{ asset('assets/vendor/nouislider/nouislider.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/group-slide/group-loop.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/xmenu/xmenu.js') }}"></script> --}}
    {{--
    <script src="{{ asset('assets/js/animation.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/custom.js') }}"></script> --}}
</body>

</html>
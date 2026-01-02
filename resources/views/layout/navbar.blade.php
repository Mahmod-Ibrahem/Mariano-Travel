<nav id='navbar'
    class=" w-full transition-all duration-500 bg-transparent border-b border-transparent {{ Request::is('/') ? 'shadow-none absolute top-0 z-50' : 'shadow' }}">
    <div class="mx-auto flex justify-between items-center px-4 md:px-8">
        <!-- Logo -->
        <a href="/" class="z-50 block w-36 relative">
            <img src="{{ asset('Images/logo.jpg') }}" alt="logo" class="h-full w-auto object-contain">
        </a>

        <!-- PC Menu -->
        <div id="nav-links"
            class="hidden md:flex items-center gap-8 font-title font-medium text-lg {{ Request::is('/') ? 'text-white' : 'text-black' }}">
            <div class="group relative">
                <a href="/" class="nav-link py-2 relative hover:text-secondry transition-colors duration-300">
                    Home
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-secondry transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>
            @foreach($superCategories as $superCategory)
                <div class="group relative">
                    <a href="{{route($superCategory->slug . '.index')}}"
                        class="nav-link py-2 relative hover:text-secondry transition-colors duration-300">
                        {{ $superCategory->name }}
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-secondry transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </div>
            @endforeach
            <div class="group relative">
                <a href="{{ route('services.index') }}"
                    class="nav-link py-2 relative hover:text-secondry transition-colors duration-300">
                    Services
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-secondry transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>
            <div class="group relative">
                <a href="{{ route('contact.index') }}"
                    class="nav-link py-2 relative hover:text-secondry transition-colors duration-300">
                    Contact Us
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-secondry transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>
            <div class="group relative">
                <a href="{{ route('about.index') }}"
                    class="nav-link py-2 relative hover:text-secondry transition-colors duration-300">
                    About Us
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-secondry transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>
        </div>

        <!-- Mobile Hamburger Button -->
        <div class="md:hidden z-[60]"> <!-- Increased Z-Index for Close Button -->
            <button id="menu-btn" type="button" class="hamburger focus:outline-none group">
                <span
                    class="hamburger-top {{ Request::is('/') ? 'bg-white' : 'bg-black' }} group-hover:bg-secondry"></span>
                <span
                    class="hamburger-middle {{ Request::is('/') ? 'bg-white' : 'bg-black' }} group-hover:bg-secondry"></span>
                <span
                    class="hamburger-bottom {{ Request::is('/') ? 'bg-white' : 'bg-black' }} group-hover:bg-secondry"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="menu-overlay"
        class="fixed inset-0 bg-black/60 z-40 opacity-0 pointer-events-none transition-opacity duration-300 backdrop-blur-sm">
    </div>

    <!-- Mobile Menu Sidebar -->
    <div id="menu"
        class="fixed top-0 right-0 h-screen w-[85%] max-w-[320px] bg-primary z-50 transform translate-x-full transition-transform duration-300 ease-in-out shadow-2xl flex flex-col pt-24 px-6">
        <ul class="flex flex-col gap-4 font-title text-xl font-medium text-white">
            <li>
                <a href="/"
                    class="flex items-center gap-3 py-3 px-4 rounded-xl hover:bg-white/10 hover:text-secondry transition-all">
                    <i class="fas fa-home text-base"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('day-tours.index') }}"
                    class="flex items-center gap-3 py-3 px-4 rounded-xl hover:bg-white/10 hover:text-secondry transition-all">
                    <i class="fas fa-map-marked-alt text-base"></i>
                    <span>Day Tours</span>
                </a>
            </li>
            <li>
                <a href="{{ route('tour-packages.index') }}"
                    class="flex items-center gap-3 py-3 px-4 rounded-xl hover:bg-white/10 hover:text-secondry transition-all">
                    <i class="fas fa-box text-base"></i>
                    <span>Tour Packages</span>
                </a>
            </li>

            <li>
                <a href="{{ route('contact.index') }}"
                    class="flex items-center gap-3 py-3 px-4 rounded-xl hover:bg-white/10 hover:text-secondry transition-all text-gray-300">
                    <i class="fas fa-envelope text-base"></i>
                    <span>Contact Us</span>
                </a>
            </li>
            <li>
                <a href="{{ route('about.index') }}"
                    class="flex items-center gap-3 py-3 px-4 rounded-xl hover:bg-white/10 hover:text-secondry transition-all text-gray-300">
                    <i class="fas fa-info-circle text-base"></i>
                    <span>About Us</span>
                </a>
            </li>
        </ul>

        <div class="mt-auto pb-10 text-center text-xs text-gray-500">
            &copy; {{ date('Y') }} Mariano Tours - Premium Tours
        </div>
    </div>
</nav>
<!-- FOOTER START -->
<footer class="pt-20 bg-white border-t border-gray-100">

    <div class="container mx-2 md:mx-auto">
        <div class="sm:pt-20 pt-10 border-b border-gray-100">
            <div class="grid grid-cols-12">
                <div class="lg:col-span-3 col-span-12 sm:px-3.75">
                    <div class="mb-10">
                        <div class="mb-10 text-center block max-w-48.25 after:table after:clear-both">
                            <a href="index.html"><img src="{{asset('Images/logo.jpg')}}" alt="logo" width="193"
                                    height="81" loading="lazy"></a>
                        </div>
                        <p class="sm:pr-12.5 mb-4 text-base text-gray-500">Travlla is a multi-award-winning
                            strategy and content creation agency that specializes in travel marketing.</p>
                        <ul class="mt-5 flex gap-2">
                            <li class="inline-flex">
                                <a class="inline-flex size-10 bg-primary/5 rounded-full justify-center items-center duration-300 text-primary text-lg hover:bg-secondry hover:text-white"
                                    href="https://www.x.com" target="_blank">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                            <li class="inline-flex">
                                <a class="inline-flex size-10 bg-primary/5 rounded-full justify-center items-center duration-300 text-primary text-lg hover:bg-secondry hover:text-white"
                                    href="https://www.facebook.com" target="_blank">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li class="inline-flex">
                                <a class="inline-flex size-10 bg-primary/5 rounded-full justify-center items-center duration-300 text-primary text-lg hover:bg-secondry hover:text-white"
                                    href="https://www.instagram.com" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="inline-flex">
                                <a class="inline-flex size-10 bg-primary/5 rounded-full justify-center items-center duration-300 text-primary text-lg hover:bg-secondry hover:text-white"
                                    href="https://www.pinterest.com/" target="_blank">
                                    <i class="fa-brands fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lg:col-span-2 col-span-6 mb-5 sm:px-3.75">
                    <div class="mb-10">
                        <h3 class="text-primary font-bold mb-7.5 relative xl:text-2xl text-xl">Explore</h3>
                        <ul>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('home') }}">Home</a></li>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('day-tours.index') }}">Day Tours</a></li>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('tour-packages.index') }}">Tour Packages</a></li>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('blog.index') }}">Blogs</a></li>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('contact.index') }}">Contact</a></li>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('about.index') }}">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="lg:col-span-2 col-span-6 mb-5 sm:px-3.75">
                    <div class="mb-10">
                        <h3 class="text-primary font-bold mb-7.5 relative xl:text-2xl text-xl">Destinations</h3>
                        <ul>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('best-destination.show', 'giza') }}">Giza</a></li>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('best-destination.show', 'cairo') }}">Cairo</a></li>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('best-destination.show', 'luxor') }}">Luxor</a></li>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('best-destination.show', 'aswan') }}">Aswan</a></li>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('best-destination.show', 'alexandria') }}">Alexandria</a></li>
                            <li class="block w-full py-1 overflow-hidden"><a
                                    class="block duration-300 text-base text-gray-600 font-medium hover:text-secondry hover:pl-2 transition-all"
                                    href="{{ route('best-destination.show', 'siwa') }}">Siwa</a></li>
                        </ul>
                    </div>
                </div>
                <div class="lg:col-span-2 col-span-6 mb-5 sm:px-3.75">
                    <div class="mb-10">
                        <h3 class="text-primary font-bold mb-7.5 relative xl:text-2xl text-xl">Pay Safely With Us</h3>

                    </div>
                </div>
                <div class="lg:col-span-3 sm:col-span-6 col-span-12 sm:px-3.75">
                    <div class="mb-10">
                        <ul>
                            <li class="mb-4 relative flex items-center">
                                <div class="size-12 rounded-full mr-4 bg-primary/5 flex items-center justify-center">
                                    <i class="fa-solid fa-phone text-lg text-secondry"></i>
                                </div>
                                <a href="tel:1236540214" class="hover:text-secondry transition-colors duration-300">
                                    <span class="text-xl text-primary font-bold font-display">123
                                        654 0214</span>
                                </a>
                            </li>
                            <li class="mb-4 relative flex items-center">
                                <div class="size-12 rounded-full mr-4 bg-primary/5 flex items-center justify-center">
                                    <i class="fa-solid fa-envelope text-lg text-secondry"></i>
                                </div>
                                <a class="text-gray-600 font-medium text-base hover:text-secondry transition-colors duration-300"
                                    href="mailto:info@example.com">travllainfo@gmail.com</a>
                            </li>
                            <li class="relative flex items-center">
                                <div class="size-12 rounded-full mr-4 bg-primary/5 flex items-center justify-center">
                                    <i class="fa-solid fa-house text-lg text-secondry"></i>
                                </div>
                                <span class="text-gray-600 font-medium text-base">55/11
                                    ronin tower New York</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-8 text-gray-500 relative z-1 font-normal border-t border-gray-100 mt-10">
            <div class="container">
                <p class="copyrights-text text-center text-sm font-medium">© <span class="current-year">2025</span> <a
                        href="#" target="_blank"><span
                            class="inline-block text-secondry uppercase text-center text-sm font-bold hover:text-primary transition-colors">Mariano
                            Tours</span></a>
                    All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
</footer>
<!-- FOOTER END -->
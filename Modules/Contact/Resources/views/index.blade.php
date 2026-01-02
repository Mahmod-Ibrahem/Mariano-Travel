@section('title')
Contact Mariano Tours | Booking & Travel Support
@endsection

@section('description')
Contact Mariano Tours for tour inquiries, custom quotes, and booking support. We’ll help you plan day trips, packages, and Nile tours—message us today.
@endsection

@extends('layout.layouts')

@section('content')
    @include('layout.header', [
        'title' => 'Contact Us',
        'breadcrumb' => 'Contact Us',
        'image' => 'images/contact-bg.jpg',
    ])

    <!-- CONTACT SECTION START -->
    <section class="py-16 md:py-24 bg-white relative overflow-hidden">
        <!-- Decoration elements -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-lightturquoise/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-safety-orange/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- GOOGLE MAP -->
            <div class="w-full mb-20 shadow-2xl rounded-[2.5rem] overflow-hidden border-8 border-white">
                <iframe class="w-full h-[400px] md:h-[550px]"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.60385042835!2d31.1107!3d30.0444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296efaa7f4!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1625612345678!5m2!1sen!2seg"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="grid lg:grid-cols-12 gap-16 items-center max-w-7xl mx-auto">
                <!-- INFO & ILLUSTRATION -->
                <div class="lg:col-span-6 space-y-10">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-display font-bold text-emeraldblue mb-6 leading-tight">
                            Reach & Get in <span class="text-safety-orange">Touch</span> With Us!
                        </h2>
                        <p class="text-gray-500 font-title text-lg leading-relaxed max-w-lg">
                            We'd love to hear from you. Our friendly team is always here to chat and help you plan your perfect Egyptian adventure.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-white p-6 rounded-3xl shadow-lg border border-gray-50 hover:shadow-xl transition-all duration-300">
                            <div class="w-14 h-14 bg-safety-orange/10 text-safety-orange rounded-2xl flex items-center justify-center mb-4">
                                <i class="fa-solid fa-phone-volume text-xl"></i>
                            </div>
                            <h5 class="text-lg font-bold text-emeraldblue mb-1">Phone</h5>
                            <a href="tel:+201210200380" class="text-gray-500 font-title text-sm hover:text-safety-orange transition-colors">+20 121 020 0380</a>
                        </div>
                        <!-- Card 2 -->
                        <div class="bg-white p-6 rounded-3xl shadow-lg border border-gray-50 hover:shadow-xl transition-all duration-300">
                            <div class="w-14 h-14 bg-safety-orange/10 text-safety-orange rounded-2xl flex items-center justify-center mb-4">
                                <i class="fa-solid fa-envelope-open-text text-xl"></i>
                            </div>
                            <h5 class="text-lg font-bold text-emeraldblue mb-1">Email</h5>
                            <a href="mailto:info@egyptroyaltours.com" class="text-gray-500 font-title text-sm hover:text-safety-orange transition-colors">info@egyptroyaltours.com</a>
                        </div>
                    </div>

                    <div class="pt-6">
                        <img src="{{ asset('Images/icons/travel-train-station.svg') }}" class="w-full max-w-[450px] mx-auto opacity-90" alt="Travel Icon">
                    </div>
                </div>

                <!-- CONTACT FORM CARD -->
                <div class="lg:col-span-6">
                    <div class="bg-white rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,0,0,0.05)] p-8 md:p-12 border border-gray-50 relative">
                        <div class="absolute -top-6 -right-6 w-20 h-20 bg-safety-orange text-white rounded-full flex items-center justify-center text-3xl shadow-xl shadow-safety-orange/20 animate-bounce">
                            <i class="fa-solid fa-paper-plane"></i>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-emeraldblue mb-8">Send us a Message</h3>

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="name" class="text-sm font-semibold text-gray-700 ml-1">Full Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                        class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:border-safety-orange focus:ring-4 focus:ring-safety-orange/5 transition-all font-title"
                                        placeholder="John Doe">
                                    @error('name')
                                        <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="space-y-2">
                                    <label for="email" class="text-sm font-semibold text-gray-700 ml-1">Email Address</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                        class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:border-safety-orange focus:ring-4 focus:ring-safety-orange/5 transition-all font-title"
                                        placeholder="john@example.com">
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="subject" class="text-sm font-semibold text-gray-700 ml-1">Subject</label>
                                <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required
                                    class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:border-safety-orange focus:ring-4 focus:ring-safety-orange/5 transition-all font-title"
                                    placeholder="Tour Inquiry">
                                @error('subject')
                                    <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label for="message" class="text-sm font-semibold text-gray-700 ml-1">Your Message</label>
                                <textarea name="message" id="message" rows="5" required
                                    class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 outline-none focus:bg-white focus:border-safety-orange focus:ring-4 focus:ring-safety-orange/5 transition-all font-title resize-none"
                                    placeholder="Write your message here...">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" 
                                class="w-full bg-safety-orange hover:bg-orange-600 text-white font-bold py-5 rounded-2xl shadow-xl shadow-safety-orange/20 transition-all duration-300 transform hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-3">
                                <span>Send Message</span>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
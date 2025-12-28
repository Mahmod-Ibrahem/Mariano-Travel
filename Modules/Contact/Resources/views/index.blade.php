@section('title')
Contact Mama Coco Egypt Tours | Booking & Travel Support
@endsection
@section('description')
Contact Mama Coco Egypt Tours for tour inquiries, custom quotes, and booking support. We’ll help you plan day trips, packages, and Nile tours—message us today.
@endsection
@extends('layout.layouts')
@section('content')
        @include('layout.header',[
            'title' => 'Contact Us',
            'breadcrumb' => 'Contact Us',
            'image' => 'images/contact-bg.jpg',
        ])        
            <!-- CONTENT START -->
            <div class="page-content">
                <div class="xl:py-30 py-12.5 px-5">
                    <div
                        class="max-w-437.5 mx-auto bg-white rounded-6xl xl:p-15 p-5 shadow-[0px_4px_80px_rgba(6,97,104,0.28)] relative">
                        <!-- GOOGLE MAP -->
                        <div class="w-full md:h-150 mb-15">
                            <div class="gmap-outline">
                                <div class="google-map">
                                    <div class="overflow-hidden" style="width: 100%">
                                        <iframe class="max-md:h-90 w-full rounded-4xl" height="600"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2969.272796714594!2d-87.64937353634511!3d41.90849403896016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fd324fc400797%3A0x76a989827d7eb84e!2s853%20W%20Blackhawk%20St%2C%20Chicago%2C%20IL%2060642%2C%20USA!5e0!3m2!1sen!2sin!4v1745326667544!5m2!1sen!2sin"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 lg:gap-7.5">
                            <div class="2xl:col-span-6 lg:col-span-5 col-span-12">
                                <div>
                                    <div
                                        class="bg-[#FFF8EB] xl:py-15 xl:px-12.5 sm:p-7.5 p-5 rounded-3xl max-lg:mx-auto max-lg:max-w-160 max-md:max-w-full">
                                        <!-- TITLE START-->
                                        <div class="sm:mb-15 mb-7.5">
                                            <h2 class="xl:text-46 md:text-40 text-3xl mb-2.5"><span
                                                    class="text-citrusyellow">Reach</span> & Get in Touch With Us!</h2>
                                            <div class="text-base">We'love to hear from you. Our friendly team is always
                                                here to chat</div>
                                        </div>
                                        <!-- TITLE END-->
                                        <form method="POST" action="{{ route('contact.post') }}">
                                            @csrf
                                            <div class="dzSubscribeMsg"></div>
                                            <input type="hidden"
                                                class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor"
                                                name="dzToDo" value="Contact">
                                            <input type="hidden"
                                                class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor"
                                                name="reCaptchaEnable" value="0">
                                            <div class="dzFormMsg">
                                            </div>

                                            <div class="mb-5">
                                                <input
                                                    class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor @error('name') border-red-500 @enderror"
                                                    type="text" name="name" id="fullname" placeholder="Enter Your Name"
                                                    value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="text-red-500 text-sm m-2 block pl-5">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5">
                                                <input
                                                    class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor @error('email') border-red-500 @enderror"
                                                    type="email" name="email" id="emailaddress"
                                                    placeholder="Enter Email Address" value="{{ old('email') }}">
                                                @error('email')
                                                    <span
                                                        class="text-red-500 text-sm font-medium m-2 block pl-5">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5">
                                                <input
                                                    class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor @error('subject') border-red-500 @enderror"
                                                    type="text" name="subject" id="Subject"
                                                    placeholder="Select Your Subject" value="{{ old('subject') }}">
                                                @error('subject')
                                                    <span class="text-red-500 text-sm m-2 block pl-5">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5">
                                                <textarea name="message" id="message"
                                                    class="block w-full min-h-42 h-full rounded-3xl border border-primary/20 py-10 px-7.5 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor @error('message') border-red-500 @enderror"
                                                    placeholder="Write Your Message">{{ old('message') }}</textarea>
                                                @error('message')
                                                    <span class="text-red-500 text-sm m-2 block pl-5">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5">
                                                {{-- <div class="input-recaptcha">
                                                    <div class="g-recaptcha" data-sitekey="<!-- Put your reCaptcha Key -->"
                                                        data-callback="verifyRecaptchaCallback"
                                                        data-expired-callback="expiredRecaptchaCallback"></div>
                                                    <input class="form-control hidden" style="display:none;"
                                                        data-recaptcha="true" required
                                                        data-error="Please complete the Captcha">
                                                </div> --}}
                                            </div>
                                            <button name="submit" type="submit" value="Submit"
                                                class="site-button butn-bg-shape">Send Message</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="2xl:col-span-6 lg:col-span-7 col-span-12">
                                <div class="relative z-1">
                                    <div class="lg:pt-34.5 pt-12.5 lg:w-112.5 w-full lg:ml-6 max-lg:px-7.5  max-md:px-0">
                                        <!-- TITLE START-->
                                        <div class="sm:mb-15 mb-7.5">
                                            <h2 class="xl:text-46 md:text-40 text-3xl mb-2.5">Contact Us<span
                                                    class="text-citrusyellow"> Detail</span></h2>
                                        </div>
                                        <!-- TITLE END-->

                                        <ul>
                                            <li class="mb-7.5">
                                                <div class="sm:flex items-center max-sm:text-center">
                                                    <div
                                                        class="bg-[#45869D] size-25 rounded-5xl flex items-center justify-center max-sm:mx-auto max-sm:mb-5">
                                                        <div
                                                            class="bg-white shadow-[0px_4px_4px_rgba(0,0,0,0.25)] size-17.5 rounded-5xl flex items-center justify-center">
                                                            <i class="fa-solid fa-phone-volume text-34 text-skyblue"></i>
                                                        </div>
                                                    </div>
                                                    <div class="sm:w-[calc(100%_-_100px)] sm:pl-7.5">
                                                        <span
                                                            class="text-lg font-normal text-primary leading-[1.4]">Phone</span>
                                                        <h6 class="md:text-28 text-xl text-darkcyan !font-semibold"><a
                                                                href="tel:1236540214">123 654 0214</a></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-7.5">
                                                <div class="sm:flex items-center max-sm:text-center">
                                                    <div
                                                        class="bg-[#CE8594] size-25 rounded-5xl flex items-center justify-center max-sm:mx-auto max-sm:mb-5">
                                                        <div
                                                            class="bg-white shadow-[0px_4px_4px_rgba(0,0,0,0.25)] size-17.5 rounded-5xl flex items-center justify-center">
                                                            <i class="fa-solid fa-envelope text-34 text-[#CE8594]"></i>
                                                        </div>
                                                    </div>
                                                    <div class="sm:w-[calc(100%_-_100px)] sm:pl-7.5">
                                                        <span
                                                            class="text-lg font-normal text-primary leading-[1.4]">Email</span>
                                                        <h6 class="md:text-28 text-xl text-darkcyan !font-semibold"><a
                                                                href="mailto:info@example.com">travllainfo@gmail.com</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-7.5">
                                                <div class="sm:flex items-center max-sm:text-center">
                                                    <div
                                                        class="bg-[#047881] size-25 rounded-5xl flex items-center justify-center max-sm:mx-auto max-sm:mb-5">
                                                        <div
                                                            class="bg-white shadow-[0px_4px_4px_rgba(0,0,0,0.25)] size-17.5 rounded-5xl flex items-center justify-center">
                                                            <i class="fa-solid fa-house text-34 text-[#047881]"></i>
                                                        </div>
                                                    </div>
                                                    <div class="sm:w-[calc(100%_-_100px)] sm:pl-7.5">
                                                        <span
                                                            class="text-lg font-normal text-primary leading-[1.4]">Address</span>
                                                        <h6 class="md:text-28 text-xl text-darkcyan !font-semibold">55/11
                                                            ronin tower, New York</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="lg:pt-12.5 max-sm:text-center">
                                            <h3 class="!font-display md:text-48 sm:text-40 text-2xl">Let's <span
                                                    class="text-citrusyellow">Talk</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTENT END -->


@endsection('content')
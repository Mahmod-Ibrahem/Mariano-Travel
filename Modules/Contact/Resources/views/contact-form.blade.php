<section class="relative md:py-24 py-16 bg-gray-50" id="contact">
  <div class="container mx-auto">
    <!-- Header -->
    <div class="grid grid-cols-1 pb-10 text-center">
      <h6 class="text-orange-600 text-base font-semibold uppercase tracking-wide mb-2">Contact Us</h6>
      <h3 class="mb-3 md:text-3xl text-2xl font-semibold text-slate-900">Get in Touch</h3>
      <p class="text-slate-500  max-w-xl mx-auto">
        Have questions about tours, bookings, or custom requests?
        Our team is ready to help and will respond as soon as possible.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-2 mt-10 items-start gap-8">
      <!-- Contact Form -->
      <div class="lg:col-span-8">
        <div class="p-8 rounded-xl md:shadow-lg bg-white border border-slate-100  transition-all">
          <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
            @csrf

            <div class="grid lg:grid-cols-12 lg:gap-6 gap-4">
              <!-- Name -->
              <div class="lg:col-span-6">
                <label for="name" class="block text-sm font-medium text-slate-700  mb-2">Full Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Your Full Name" required
                  class="w-full rounded-md border px-4 py-2 text-slate-900 focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:outline-none transition-all 
                  {{ $errors->has('name') ? 'border-red-500 ring-red-400' : 'border-slate-200' }}">
                @error('name')
                  <small class="text-red-500 font-medium text-xs mt-1 block">{{ $message }}</small>
                @enderror
              </div>

              <!-- Email -->
              <div class="lg:col-span-6">
                <label for="email" class="block text-sm font-medium text-slate-700  mb-2">Email Address</label>
                <input type="email" name="email" id="email" required value="{{ old('email') }}" placeholder="Your Email"
                  class="w-full rounded-md border px-4 py-2 text-slate-900 focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:outline-none transition-all 
                  {{ $errors->has('email') ? 'border-red-500 ring-red-400' : 'border-slate-200' }}">
                @error('email')
                  <small class="text-red-500 font-medium text-xs mt-1 block">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <!-- Subject -->
            <div>
              <label for="subject" class="block text-sm font-medium text-slate-700 mb-2">Subject</label>
              <input type="text" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject" required
                class="w-full rounded-md border px-4 py-2 text-slate-900 focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:outline-none transition-all 
                {{ $errors->has('subject') ? 'border-red-500 ring-red-400' : 'border-slate-200' }}">
              @error('subject')
                <small class="text-red-500 font-medium text-xs mt-1 block">{{ $message }}</small>
              @enderror
            </div>

            <!-- Message -->
            <div>
              <label for="message" class="block text-sm font-medium text-slate-700 mb-2">Message</label>
              <textarea name="message" id="message" rows="6" placeholder="Write your message here..." required
                class="w-full rounded-md border px-4 py-2 text-slate-900 focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:outline-none transition-all 
                {{ $errors->has('message') ? 'border-red-500 ring-red-400' : 'border-slate-200' }}">{{ old('message') }}</textarea>
              @error('message')
                <small class="text-red-500 font-medium text-xs mt-1 block">{{ $message }}</small>
              @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit"
              class="bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 rounded-lg text-white font-medium shadow-sm transition-all px-6 py-2 mt-4 w-full sm:w-auto flex items-center justify-center gap-2">
              <i class="fa-solid fa-paper-plane"></i> Send Message
            </button>
          </form>
        </div>
      </div>

      <!-- Side Info -->
      <div class="lg:col-span-4">
        <div class="lg:ms-8 flex flex-col items-center text-center space-y-4">
          <div class="bg-white p-6 rounded-full shadow-md">
            <i class="fa-solid fa-envelope-open-text text-4xl text-orange-600"></i>
          </div>
          <h5 class="text-lg font-semibold">We Value Your Message</h5>
          <p class="text-slate-500 max-w-sm">We appreciate you reaching out and look forward to assisting you.</p>
        </div>
      </div>
    </div>
  </div>
</section>
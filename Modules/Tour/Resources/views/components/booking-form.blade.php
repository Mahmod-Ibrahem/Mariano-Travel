<div class="styleswitcher">

    <div class="styleswitcher-inner ">
        <div class="twm-side-filter-form">
            <form method="POST" action="{{ route('booking.store', $tour) }}">
                @csrf
                <div class="mb-8">

                    <div class="pb-8 mb-8 border-b border-gray-200">

                        <!-- Full Name Input -->
                        <div class="w-full">
                            <div <div
                                class="mb-3 bg-white rounded-3xl py-4 px-4 md:px-6 border border-gray-200 h-auto min-h-[5rem] custom-select full-select focus-within:border-secondry focus-within:ring-2 focus-within:ring-secondry/50 transition-all duration-200">
                                <label class="text-base md:text-lg text-primary font-bold font-title block">Full
                                    Name</label>
                                <input
                                    class="w-full text-base text-bodycolor bg-white outline-0 placeholder:text-bodycolor focus:outline-0"
                                    type="text" name="full_name" id="full_name" placeholder="Enter Your Name">

                            </div>
                        </div>

                        <!-- Email Input -->
                        <div class="w-full">
                            <div <div
                                class="mb-3 bg-white rounded-3xl py-4 px-4 md:px-6 border border-gray-200 h-auto min-h-[5rem] custom-select full-select focus-within:border-secondry focus-within:ring-2 focus-within:ring-secondry/50 transition-all duration-200">
                                <label
                                    class="text-base md:text-lg text-primary font-bold font-title block">Email</label>
                                <input
                                    class="w-full text-base text-bodycolor bg-white outline-0 placeholder:text-bodycolor focus:outline-0"
                                    type="email" name="email" id="email" placeholder="Enter Your Email">

                            </div>
                        </div>

                        <!-- Country Input -->
                        <div class="w-full">
                            <div <div
                                class="mb-3 bg-white rounded-3xl py-4 px-4 md:px-6 border border-gray-200 h-auto min-h-[5rem] custom-select full-select focus-within:border-secondry focus-within:ring-2 focus-within:ring-secondry/50 transition-all duration-200">
                                <label
                                    class="text-base md:text-lg text-primary font-bold font-title block">Country</label>
                                <input
                                    class="w-full text-base text-bodycolor bg-white outline-0 placeholder:text-bodycolor focus:outline-0"
                                    type="text" name="country" id="country" placeholder="Enter Your Country">

                            </div>
                        </div>

                        <!-- Hotel Input -->
                        <div class="w-full">
                            <div <div
                                class="mb-3 bg-white rounded-3xl py-4 px-4 md:px-6 border border-gray-200 h-auto min-h-[5rem] custom-select full-select focus-within:border-secondry focus-within:ring-2 focus-within:ring-secondry/50 transition-all duration-200">
                                <label
                                    class="text-base md:text-lg text-primary font-bold font-title block">Hotel</label>
                                <input
                                    class="w-full text-base text-bodycolor bg-white outline-0 placeholder:text-bodycolor focus:outline-0"
                                    type="text" name="hotel" id="hotel" placeholder="Enter Hotel Name">

                            </div>
                        </div>

                        <!-- Start Date Input -->
                        <div class="w-full">
                            <div 
                                class="mb-3 bg-white rounded-3xl py-4 px-4 md:px-6 border border-gray-200 h-auto min-h-[5rem] focus-within:border-secondry focus-within:ring-2 focus-within:ring-secondry/50 transition-all duration-200">
                                <label class="text-base md:text-lg text-primary font-bold font-title block">Start
                                    Date</label>
                                <div class="relative flex flex-wrap items-stretch w-full">
                                    <input name="start_date" id="start_date"
                                        class="outline-none h-8.5 p-0 font-base font-normal text-sm text-[#545454] bg-transparent placeholder:!text-[#545454] w-full flatpickr1 focus:outline-0"
                                        placeholder="Date">
                                    <span class="absolute right-0 bottom-2 text-input text-sm pointer-events-none">
                                        <i class="fa fa-solid fa-calendar-days"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Adults Input -->
                        <div class="w-full">
                            <div
                                class="mb-3 bg-white rounded-3xl py-4 px-4 md:px-6 border border-gray-200 h-auto min-h-[5rem] focus-within:border-secondry focus-within:ring-2 focus-within:ring-secondry/50 transition-all duration-200">
                                <label
                                    class="text-base md:text-lg text-primary font-bold font-title block">Adults</label>
                                <div class="input-group">
                                    <span class="flex gap-2 md:gap-3 w-full">
                                        <input type="number" min="1" step="1" value="0" name="adults"
                                            class="touchspin h-6 w-full text-gray-600 font-bold outline-none text-sm focus:outline-0">
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Children Input -->
                        <div class="w-full">
                            <div
                                class="mb-3 bg-white rounded-3xl py-4 px-4 md:px-6 border border-gray-200 h-auto min-h-[5rem] focus-within:border-secondry focus-within:ring-2 focus-within:ring-secondry/50 transition-all duration-200">
                                <label
                                    class="text-base md:text-lg text-primary font-bold font-title block">Children</label>
                                <div class="input-group">
                                    <span class="flex gap-2 md:gap-3 w-full">
                                        <input type="number" min="0" step="1" value="0" name="children"
                                            class="touchspin h-6 w-full text-gray-600 font-bold outline-none text-sm focus:outline-0">
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Method Select -->
                        <div class="w-full">
                            <div
                                class="mb-3 bg-white rounded-3xl py-4 px-4 md:px-6 border border-gray-200 h-auto min-h-[5rem] focus-within:border-secondry focus-within:ring-2 focus-within:ring-secondry/50 transition-all duration-200">
                                <label class="text-base md:text-lg text-primary font-bold font-title block">Payment
                                    Method</label>

                                <!-- Replaced native select with custom dropdown -->
                                <div class="custom-select-wrapper relative">
                                    <select name="payment_method" id="payment_method"
                                        class="custom-select-hidden absolute opacity-0 w-0 h-0"
                                        data-style="form-control">
                                        <option value="cash" selected>Cash</option>
                                        <option value="paypal">Paypal</option>
                                    </select>

                                    <div class="custom-select-display flex items-center justify-between cursor-pointer hover:opacity-80 transition-opacity"
                                        data-target="payment_method">
                                        <span class="selected-value text-base text-gray-600 font-medium">Cash</span>
                                        <i
                                            class="las la-chevron-down text-lg text-gray-600 transition-transform duration-200"></i>
                                    </div>

                                    <div
                                        class="custom-select-menu hidden absolute top-full left-0 right-0 mt-2 bg-white border border-gray-200 rounded-2xl shadow-lg z-50 overflow-hidden">
                                        <div class="custom-select-option px-6 py-3 cursor-pointer hover:bg-primary/5 transition-colors"
                                            data-value="cash">
                                            <span class="text-base text-gray-600 font-medium">Cash</span>
                                        </div>
                                        <div class="custom-select-option px-6 py-3 cursor-pointer hover:bg-primary/5 transition-colors"
                                            data-value="paypal">
                                            <span class="text-base text-gray-600 font-medium">PayPal</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Total Price Display -->
                <div class="w-full mb-5">
                    <div
                        class="bg-gradient-to-r from-primary/10 to-secondry/10 rounded-3xl py-4 px-6 border border-gray-200">
                        <div class="flex justify-between items-center">
                            <label class="text-lg text-primary font-bold font-title">Total Price</label>
                            @if($tour->is_bookable)
                                <span id="total-price" class="text-3xl font-black text-secondry">$0.00</span>
                            @else
                                <span id="total-price" class="text-2xl font-bold text-secondry">On Request</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="twm-side-filter-aply-btn text-center">
                    <!-- Enhanced button with safety-orange background, professional styling, and hover effects -->
                    <button type="submit"
                        class="w-full bg-orange-500 hover:bg-orange-600 active:bg-orange-700 text-white font-bold font-title text-lg py-4 px-6 rounded-3xl shadow-lg hover:shadow-xl transition-all duration-200 transform hover:scale-105 active:scale-95 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 border-0">
                        Book Now
                    </button>
                </div>

            </form>


        </div>
    </div>
</div>
<style>
    .custom-select-wrapper {
        width: 100%;
    }

    .custom-select-display {
        width: 100%;
        height: 100%;
        padding: 0;
    }

    .custom-select-menu {
        min-width: 100%;
        max-height: 250px;
        overflow-y: auto;
    }

    .custom-select-menu::-webkit-scrollbar {
        width: 6px;
    }

    .custom-select-menu::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .custom-select-menu::-webkit-scrollbar-thumb {
        background: #d1d5db;
        border-radius: 3px;
    }

    .custom-select-menu::-webkit-scrollbar-thumb:hover {
        background: #9ca3af;
    }

    .custom-select-option {
        white-space: nowrap;
        border-bottom: 1px solid #f3f4f6;
    }

    .custom-select-option:last-child {
        border-bottom: none;
    }

    .custom-select-option.active {
        background-color: rgba(var(--color-secondry), 0.1);
        color: var(--color-secondry);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const customSelects = document.querySelectorAll('.custom-select-wrapper');

        customSelects.forEach(wrapper => {
            const display = wrapper.querySelector('.custom-select-display');
            const menu = wrapper.querySelector('.custom-select-menu');
            const options = wrapper.querySelectorAll('.custom-select-option');
            const hiddenSelect = wrapper.querySelector('.custom-select-hidden');
            const selectedValue = wrapper.querySelector('.selected-value');
            const chevron = display.querySelector('i');

            // Toggle menu on display click
            display.addEventListener('click', (e) => {
                e.stopPropagation();
                menu.classList.toggle('hidden');
                chevron.style.transform = menu.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
            });

            // Handle option selection
            options.forEach(option => {
                option.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const value = option.getAttribute('data-value');
                    const text = option.textContent.trim();

                    // Update display text
                    selectedValue.textContent = text;

                    // Update hidden select
                    hiddenSelect.value = value;

                    // Update active state
                    options.forEach(opt => opt.classList.remove('active'));
                    option.classList.add('active');

                    // Close menu
                    menu.classList.add('hidden');
                    chevron.style.transform = 'rotate(0deg)';

                    // Trigger change event
                    hiddenSelect.dispatchEvent(new Event('change', { bubbles: true }));
                });
            });

            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!wrapper.contains(e.target)) {
                    menu.classList.add('hidden');
                    chevron.style.transform = 'rotate(0deg)';
                }
            });

            // Set initial active option
            const initialValue = hiddenSelect.value;
            options.forEach(option => {
                if (option.getAttribute('data-value') === initialValue) {
                    option.classList.add('active');
                }
            });
        });


        @if($tour->is_bookable)
            // Price tiers from the tour data
            const priceTwoFive = {{ $tour->price_two_five ?? 0 }};
            const priceSixTwenty = {{ $tour->price_six_twenty ?? 0 }};
            const pricePerPerson = {{ $tour->price_per_person ?? 0 }};

            const adultsInput = document.querySelector('input[name="adults"]');
            const childrenInput = document.querySelector('input[name="children"]');
            const totalPriceDisplay = document.getElementById('total-price');

            function calculateTotalPrice() {
                const adults = parseInt(adultsInput.value) || 0;
                const children = parseInt(childrenInput.value) || 0;

                let total = 0;

                // Calculate based on pricing tiers
                if (adults === 1) {
                    // 1 adult: use price_per_person
                    total = adults * pricePerPerson + 0.5 * children * pricePerPerson;
                } else if (adults >= 2 && adults <= 5) {
                    // 2-5 adults: use price_two_five
                    total = adults * priceTwoFive + 0.5 * children * priceTwoFive;
                } else if (adults >= 6) {
                    // 6+ adults: use price_six_twenty
                    total = adults * priceSixTwenty + 0.5 * children * priceSixTwenty;
                }

                // Update the display
                totalPriceDisplay.textContent = '$' + total.toFixed(2);
            }

            // Calculate initial price
            calculateTotalPrice();

            // Listen for input changes
            adultsInput.addEventListener('input', calculateTotalPrice);
            childrenInput.addEventListener('input', calculateTotalPrice);

            // Also listen for button clicks (plus/minus buttons)
            document.querySelectorAll('.button-plus, .button-minus').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    setTimeout(calculateTotalPrice, 10);
                });
            });
        @endif



        // Initialize Flatpickr specifically for this input
        const dateInput = document.getElementById('start_date');
        if (dateInput && typeof flatpickr !== 'undefined') {
            flatpickr(dateInput, {
                minDate: "today"
            });
        }
    });
</script>
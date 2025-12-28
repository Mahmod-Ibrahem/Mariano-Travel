<div class="styleswitcher">

    <div class="styleswitcher-inner ">
        <div class="twm-side-filter-form">
            <form method="POST" action="{{ route('booking.store', $tour) }}">
                @csrf
                <div class="mb-7.5">

                    <div class="pb-7.5 mb-7.5 border-b border-primary/20">

                        <div class="w-full">
                            <div
                                class="mb-2.5 bg-white rounded-25xl pt-3.75 pb-2.5 px-7.5 border border-primary/20 h-20 custom-select full-select">
                                <label class="text-xl text-primary font-bold font-title block">Full
                                    Name</label>
                                <input
                                    class="w-full text-base text-bodycolor bg-white outline-0 placeholder:text-bodycolor"
                                    type="text" name="full_name" id="full_name" placeholder="Enter Your Name">

                            </div>
                        </div>

                        <div class="w-full">
                            <div
                                class="mb-2.5 bg-white rounded-25xl pt-3.75 pb-2.5 px-7.5 border border-primary/20 h-20 custom-select full-select">
                                <label class="text-xl text-primary font-bold font-title block">Email</label>
                                <input
                                    class="w-full text-base text-bodycolor bg-white outline-0 placeholder:text-bodycolor"
                                    type="email" name="email" id="email" placeholder="Enter Your Email">

                            </div>
                        </div>

                        <div class="w-full">
                            <div
                                class="mb-2.5 bg-white rounded-25xl pt-3.75 pb-2.5 px-7.5 border border-primary/20 h-20 custom-select full-select">
                                <label class="text-xl text-primary font-bold font-title block">Country</label>
                                <input
                                    class="w-full text-base text-bodycolor bg-white outline-0 placeholder:text-bodycolor"
                                    type="text" name="country" id="country" placeholder="Enter Your Country">

                            </div>
                        </div>

                        <div class="w-full">
                            <div
                                class="mb-2.5 bg-white rounded-25xl pt-3.75 pb-2.5 px-7.5 border border-primary/20 h-20 custom-select full-select">
                                <label class="text-xl text-primary font-bold font-title block">Hotel</label>
                                <input
                                    class="w-full text-base text-bodycolor bg-white outline-0 placeholder:text-bodycolor"
                                    type="text" name="hotel" id="hotel" placeholder="Enter Hotel Name">

                            </div>
                        </div>

                        <div class="w-full">
                            <div
                                class="mb-2.5 bg-white rounded-25xl pt-3.75 pb-2.5 px-7.5 border border-primary/20 h-20">
                                <label class="text-xl text-primary font-bold font-title block">Start
                                    Date</label>
                                <div class="relative flex flex-wrap items-stretch w-full">
                                    <input name="start_date" id="start_date"
                                        class="outline-none h-8.5 p-0 font-base font-normal text-sm text-[#545454] bg-transparent placeholder:!text-[#545454] w-full flatpickr1"
                                        placeholder="Date">
                                    <span class="absolute right-0 bottom-2 text-input text-sm pointer-events-none">
                                        <i class="fa fa-solid fa-calendar-days"></i>
                                    </span>
                                </div>
                            </div>
                        </div>



                        <div class="w-full">
                            <div
                                class="mb-2.5 bg-white rounded-25xl pt-3.75 pb-2.5 px-7.5 border border-primary/20 h-20">
                                <label class="text-xl text-primary font-bold font-title block">Adults</label>
                                <div class="input-group">
                                    <span class="flex gap-2.5 w-full">
                                        <input type="number" min="1" step="1" value="0" name="adults"
                                            class="touchspin h-6 w-full leading-6.75 text-[#545454] font-bold outline-none font-base text-sm">
                                        <button type="button" value="-" data-field="adults"
                                            class="button-minus cursor-pointer size-6 leading-6.75 text-center text-base text-input"><i
                                                class="las la-minus text-lg"></i></button>
                                        <button type="button" value="+" data-field="adults"
                                            class="button-plus cursor-pointer size-6 leading-6.75 text-center text-base text-input"><i
                                                class="las la-plus text-lg"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="w-full">
                            <div
                                class="mb-2.5 bg-white rounded-25xl pt-3.75 pb-2.5 px-7.5 border border-primary/20 h-20">
                                <label class="text-xl text-primary font-bold font-title block">Childeren</label>
                                <div class="input-group">
                                    <span class="flex gap-2.5 w-full">
                                        <input type="number" min="0" step="1" value="0" name="children"
                                            class="touchspin h-6 w-full leading-6.75 text-[#545454] font-bold outline-none font-base text-sm">
                                        <button type="button" value="-" data-field="children"
                                            class="button-minus cursor-pointer size-6 leading-6.75 text-center text-base text-input"><i
                                                class="las la-minus text-lg"></i></button>
                                        <button type="button" value="+" data-field="children"
                                            class="button-plus cursor-pointer size-6 leading-6.75 text-center text-base text-input"><i
                                                class="las la-plus text-lg"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="w-full">
                            <div
                                class="mb-2.5 bg-white rounded-25xl pt-3.75 pb-2.5 px-7.5 border border-primary/20 h-20 custom-select full-select">
                                <label class="text-xl text-primary font-bold font-title block">Payment
                                    Method</label>
                                <select name="payment_method" class="dynamic-select" data-style="form-control">
                                    <option value="cash" selected>Cash</option>
                                    <option value="paypal">Paypal</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Total Price Display -->
                <div class="w-full mb-5">
                    <div
                        class="bg-gradient-to-r from-primary/10 to-citrusyellow/10 rounded-25xl pt-3.75 pb-3.75 px-7.5 border border-primary/20">
                        <div class="flex justify-between items-center">
                            <label class="text-xl text-primary font-bold font-title">Total Price</label>
                            <span id="total-price" class="text-28 font-black text-citrusyellow">$0.00</span>
                        </div>
                    </div>
                </div>

                <div class="twm-side-filter-aply-btn text-center">
                    <button type="submit" class="site-button butn-bg-shape">Book Now</button>
                </div>

            </form>


        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
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

        // Initialize Flatpickr safely
        const dateInput = document.querySelector('.flatpickr1');
        if (dateInput && typeof flatpickr !== 'undefined') {
            // Check if already initialized to avoid duplicates
            if (!dateInput._flatpickr) {
                flatpickr(dateInput, {
                    minDate: "today"
                });
            }
        }
    });
</script>
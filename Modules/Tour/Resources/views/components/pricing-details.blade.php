<!-- Pricing Section in Main Content -->
@if($tour->is_bookable)
    <div class="w-full mb-8">
        <h4 class="text-2xl leading-tight mb-4 text-primary font-bold">Pricing Details</h4>
        <div class="bg-white rounded-3xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50">
                        <tr class="border-b border-gray-200">
                            <th class="py-4 px-6 text-base font-bold text-primary">Group Size</th>
                            <th class="py-4 px-6 text-base font-bold text-primary">Price Per Person</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-100 last:border-0 hover:bg-gray-50 transition-colors">
                            <td class="py-4 px-6 text-base text-gray-600">1 Person</td>
                            <td class="py-4 px-6 text-lg font-bold text-secondry">${{ $tour->price_per_person }}</td>
                        </tr>
                        <tr class="border-b border-gray-100 last:border-0 hover:bg-gray-50 transition-colors">
                            <td class="py-4 px-6 text-base text-gray-600">2-5 People</td>
                            <td class="py-4 px-6 text-lg font-bold text-secondry">${{ $tour->price_two_five }}</td>
                        </tr>
                        <tr class="border-b border-gray-100 last:border-0 hover:bg-gray-50 transition-colors">
                            <td class="py-4 px-6 text-base text-gray-600">6+ People</td>
                            <td class="py-4 px-6 text-lg font-bold text-secondry">${{ $tour->price_six_twenty }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif
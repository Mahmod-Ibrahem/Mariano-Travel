<?php

namespace Modules\Category\Database\seeders;

use Illuminate\Database\Seeder;
use Modules\Category\Entities\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Giza Day Tours',
                'slug' => 'giza-day-tours',
                'type' => 'day-tours',
                'country_id' => 1,
                'description' => 'Explore the magnificent pyramids of Giza and the Great Sphinx.',
                'image' => 'giza-day-tours.jpg',
                'title_meta' => 'Giza Day Tours | Pyramids & Sphinx Tours | Mariano Tours',
                'description_meta' => 'Discover the best Giza day tours. Visit the Great Pyramids, Sphinx, and ancient wonders with expert guides. Book your unforgettable Giza adventure today!',
                'bg_header' => 'Explore Giza Day Tours',
            ],
            [
                'name' => 'Cairo Day Tours',
                'slug' => 'cairo-day-tours',
                'type' => 'day-tours',
                'country_id' => 1,
                'description' => 'Discover the vibrant capital city with its museums and historic sites.',
                'image' => 'cairo-day-tours.jpg',
                'title_meta' => 'Cairo Day Tours | Egyptian Museum & Historic Cairo | Mariano Tours',
                'description_meta' => 'Explore Cairo with our guided day tours. Visit the Egyptian Museum, Khan El Khalili bazaar, and historic mosques. Book your Cairo adventure now!',
                'bg_header' => 'Discover Cairo Day Tours',
            ],
            [
                'name' => 'Luxor Day Tours',
                'slug' => 'luxor-day-tours',
                'type' => 'day-tours',
                'country_id' => 1,
                'description' => 'Visit the ancient temples and tombs in the Valley of the Kings.',
                'image' => 'luxor-day-tours.jpg',
                'title_meta' => 'Luxor Day Tours | Valley of Kings & Temples | Mariano Tours',
                'description_meta' => 'Experience Luxor day tours to the Valley of the Kings, Karnak Temple, and ancient treasures. Expert guided tours with unforgettable memories!',
                'bg_header' => 'Experience Luxor Day Tours',
            ],
            [
                'name' => 'Aswan Day Tours',
                'slug' => 'aswan-day-tours',
                'type' => 'day-tours',
                'country_id' => 1,
                'description' => 'Experience the beauty of Aswan and its stunning Nile views.',
                'image' => 'aswan-day-tours.jpg',
                'title_meta' => 'Aswan Day Tours | Philae Temple & Nile Adventures | Mariano Tours',
                'description_meta' => 'Discover Aswan day tours featuring Philae Temple, the High Dam, and scenic Nile cruises. Book your Aswan experience with expert guides today!',
                'bg_header' => 'Discover Aswan Day Tours',
            ],
            [
                'name' => 'Alexandria Day Tours',
                'slug' => 'alexandria-day-tours',
                'type' => 'day-tours',
                'country_id' => 1,
                'description' => 'Explore the Mediterranean charm of Alexandria and its ancient history.',
                'image' => 'alexandria-day-tours.jpg',
                'title_meta' => 'Alexandria Day Tours | Mediterranean Egypt Tours | Mariano Tours',
                'description_meta' => 'Explore Alexandria day tours to the Library, Catacombs, and Mediterranean coast. Discover the pearl of the Mediterranean with our expert guides!',
                'bg_header' => 'Explore Alexandria Day Tours',
            ],
            [
                'name' => 'Egypt Classic Tours',
                'slug' => 'egypt-classic-tours',
                'type' => 'tour-packages',
                'country_id' => 1,
                'description' => 'Experience the timeless wonders of Egypt with our Classic Tours.',
                'image' => 'egypt-classic-tours.jpg',
                'title_meta' => 'Egypt Classic Tours | Traditional Egypt Travel Packages | Mariano Tours',
                'description_meta' => 'Experience Egypt classic tours covering Cairo, Luxor, and Aswan. Explore pyramids, temples, and ancient wonders with our comprehensive tour packages!',
                'bg_header' => 'Egypt Classic Tours',
            ],
            [
                'name' => 'Egypt Luxury Tours',
                'slug' => 'egypt-luxury-tours',
                'type' => 'tour-packages',
                'country_id' => 1,
                'description' => 'Enjoy Egypt in style and comfort with our exclusive Luxury Tours.',
                'image' => 'egypt-luxury-tours.jpg',
                'title_meta' => 'Egypt Luxury Tours | 5-Star Egypt Travel Packages | Mariano Tours',
                'description_meta' => 'Indulge in Egypt luxury tours with 5-star hotels, private guides, and VIP experiences. Discover Egypt in ultimate comfort and style!',
                'bg_header' => 'Egypt Luxury Tours',
            ],
            [
                'name' => 'Egypt Family Tours',
                'slug' => 'egypt-family-tours',
                'type' => 'tour-packages',
                'country_id' => 1,
                'description' => 'Create unforgettable memories with your loved ones on our Family Tours.',
                'image' => 'egypt-family-tours.jpg',
                'title_meta' => 'Egypt Family Tours | Kid-Friendly Egypt Vacations | Mariano Tours',
                'description_meta' => 'Plan your Egypt family tours with kid-friendly activities, comfortable accommodations, and memorable experiences for all ages. Book your family adventure!',
                'bg_header' => 'Egypt Family Tours',
            ],
            [
                'name' => 'Egypt Christmas Tours',
                'slug' => 'egypt-christmas-tours',
                'type' => 'tour-packages',
                'country_id' => 1,
                'description' => 'Celebrate the festive season in the land of the Pharaohs.',
                'image' => 'egypt-christmas-tours.jpg',
                'title_meta' => 'Egypt Christmas Tours | Holiday Egypt Packages | Mariano Tours',
                'description_meta' => 'Celebrate with Egypt Christmas tours featuring festive experiences, ancient wonders, and holiday magic in the land of the Pharaohs!',
                'bg_header' => 'Egypt Christmas Tours',
            ],
            [
                'name' => 'Egypt Honeymoon Tours',
                'slug' => 'egypt-honeymoon-tours',
                'type' => 'tour-packages',
                'country_id' => 1,
                'description' => 'Romantic getaways and breathtaking views for your perfect Honeymoon.',
                'image' => 'egypt-honeymoon-tours.jpg',
                'title_meta' => 'Egypt Honeymoon Tours | Romantic Egypt Vacations | Mariano Tours',
                'description_meta' => 'Plan your dream Egypt honeymoon tours with romantic Nile cruises, private dinners, and breathtaking sunsets. Start your journey together in Egypt!',
                'bg_header' => 'Egypt Honeymoon Tours',
            ],
            [
                'name' => 'Egypt Short Break Tours',
                'slug' => 'egypt-short-break-tours',
                'type' => 'tour-packages',
                'country_id' => 1,
                'description' => 'Quick but immersive escapes to Egypt\'s highlights.',
                'image' => 'egypt-short-break-tours.jpg',
                'title_meta' => 'Egypt Short Break Tours | Weekend Egypt Getaways | Mariano Tours',
                'description_meta' => 'Discover Egypt short break tours perfect for quick getaways. Explore Egypt\'s highlights in just a few days with our expertly planned itineraries!',
                'bg_header' => 'Egypt Short Break Tours',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

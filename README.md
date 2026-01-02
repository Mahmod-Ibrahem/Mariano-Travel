# 🌍 Mariano Tours - Premium Tour & Travel Ecosystem

A high-performance, modular tour booking and management ecosystem built with **Laravel 11** and **Vue.js 3**. Designed for scalability, SEO excellence, and a premium user experience.

---

## 🌟 Core Advantages

### 1. **Elite Modular Architecture**

Powered by `nwidart/laravel-modules`, our system isn't just a codebase—it's a collection of **20+ specialized engines**.

-   **Plug-and-Play**: Easily toggle modules like `Inclusion`, `Exclusion`, or `PayPal` without affecting core stability.
-   **Atomic Scaling**: Each feature operates in its own domain, allowing for rapid independent development and testing.
-   **Clean Separation**: Complete isolation of business logic, ensuring a maintainable long-term legacy.

### 2. **Advanced Payment & Pricing Engine**

Integrated with **PayPal** (`srmklive/paypal`) to provide a seamless financial experience.

-   **Tiered Dynamic Pricing**: Automatic price calculation based on group size (Individual, 2-5 travelers, or 6-20+ groups) to maximize conversion.
-   **Secure Transaction Flow**: Industry-standard encryption and real-time payment status tracking.
-   **Transaction History**: Comprehensive ledger within the `Booking` and `PayPal` modules for transparent auditing.

### 3. **Next-Generation Frontend Stack**

We bridge the gap between heavy administration and blazing-fast client performance.

-   **Admin Command Center**: A state-of-the-art dashboard built with **Vue 3.4** and **PrimeVue 4.2**. Featuring a slick **Aura theme**, interactive tree-based navigation, and ultra-responsive data tables.
-   **High-Conversion Client Portal**: A **Blade + Tailwind CSS** frontend optimized for **SEO** and Core Web Vitals.
-   **Interactive UX**: Smooth animations with **Swiper.js** and **FontAwesome 6** icons for a world-class travel browsing experience.

### 4. **SEO & Content Dominance**

Built from the ground up to rank and convert.

-   **Structural SEO**: Semantic HTML5, unique meta-tags per page, and clean URL slugs managed by `eloquent-sluggable`.
-   **Dynamic Content Ecosystem**: Integrated `Blog`, `Review`, `FAQ`, and `Page` modules designed to build authority and trust.
-   **Multi-Language Ready**: JSON-based translations via `spatie/laravel-translatable` for global reach without performance overhead.

---

## 🚀 Key Features & Modules

| Feature/Module          | Purpose             | Impact                                                         |
| :---------------------- | :------------------ | :------------------------------------------------------------- |
| **Tour**                | Core Catalog        | Manages trips, packages, day tours, and complex pricing logic. |
| **Booking**             | Conversion Engine   | Handles booking forms, guest data, and availability checks.    |
| **Itinerary**           | Travel Plans        | Detailed day-by-day breakdowns of tour schedules.              |
| **Location**            | Global Destinations | Hierarchical management of countries and local destinations.   |
| **Category**            | Organization        | flexible categorization (SuperCategory -> Category) for tours. |
| **Gallery**             | Visuals             | High-quality image management for showcasing destinations.     |
| **Review**              | Social Proof        | Customer feedback and rating system to drive trust.            |
| **Blog**                | Content Marketing   | Articles and travel guides to improve SEO and engagement.      |
| **PayPal**              | Payments            | Secure payment gateway integration.                            |
| **Inclusion/Exclusion** | Transparency        | Clear listing of what is included and excluded in packages.    |
| **Contact**             | Communication       | Inquiries and contact form management.                         |
| **Notification**        | Alerts              | System-wide notifications for admins and users.                |

---

## 🛠️ Technology Stack

### Backend Powerhouse

-   **Framework**: Laravel 11.x (The latest in PHP elegance)
-   **Language**: PHP 8.2+ (Typed, fast, and secure)
-   **Architecture**: Service Layer Pattern & Repository Patterns.
-   **Auth**: Laravel Sanctum for secure admin API interactions.

### Frontend Innovation

-   **Admin**: Vue.js 3 (Composition API) + PrimeVue + Vite 5.
-   **Client**: Laravel Blade + Tailwind CSS 3.4.
-   **Media**: Intervention Image 3 for automatic, optimized asset processing.

---

## 📁 Elite Code Organization

Each module is a mini-application, following a strict PSR-4 standard:

```bash
Modules/Tour/
├── Entities/         # Eloquent Models
├── Http/             # Controllers, FormRequests, Middleware
├── Service/          # Core Business Logic
├── Transformers/     # API Resources (Data Masking)
├── Resources/views/  # Modular Blade Components
└── Routes/           # Dedicated API & Web Endpoints
```

---

## 🔐 Security & Reliability

-   **Data Integrity**: Strict FormRequest validation and SQL injection prevention via Eloquent.
-   **XSS Protection**: Automatic output escaping tailored for modern browser security.
-   **Error Handling**: Custom 404 pages and graceful error management.

**Brand**: Mariano Tours

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('image');
            $table->json('slug')->nullable();
            $table->json('name')->nullable();
            $table->json('header')->nullable();
            $table->json('bg_header')->nullable();
            $table->json('description')->nullable();
            $table->json('title_meta')->nullable();
            $table->json('description_meta')->nullable();
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->json('title')->nullable()->change();
            $table->json('content')->nullable()->change();
            $table->json('reviewer')->nullable()->change();
            $table->foreignId('tour_id')->nullable()->after('id')->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->text('title')->nullable(false)->change();
            $table->text('content')->nullable(false)->change();
            $table->string('reviewer')->nullable(false)->change();
            $table->dropForeign(['tour_id']);
            $table->dropColumn('tour_id');
        });
    }
};

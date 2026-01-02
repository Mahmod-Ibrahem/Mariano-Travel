<?php

use Illuminate\Support\Facades\Route;
use Modules\SuperCategory\App\Http\Controllers\Api\SuperCategoryController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('super-category', SuperCategoryController::class);
});

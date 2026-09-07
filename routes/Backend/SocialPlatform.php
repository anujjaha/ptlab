<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SocialPlatform\AdminSocialPlatformController;

Route::group([], function () {
    /*
     * Admin SocialPlatform Controller
     */

    // Route for Ajax DataTable
    Route::get("socialplatform/get", [AdminSocialPlatformController::class, 'getTableData'])->name("socialplatform.get-list-data");

    Route::resource("socialplatform", AdminSocialPlatformController::class);
});
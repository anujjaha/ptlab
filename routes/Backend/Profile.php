<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Profile\AdminProfileController;

Route::group([], function () {
    /*
     * Admin Profile Controller
     */

    // Route for Ajax DataTable
    Route::get("profile/get", [AdminProfileController::class, 'getTableData'])->name("profile.get-list-data");

    Route::resource("profile", AdminProfileController::class);
});
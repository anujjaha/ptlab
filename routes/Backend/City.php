<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\City\AdminCityController;

Route::group([], function () {
    /*
     * Admin City Controller
     */

    // Route for Ajax DataTable
    Route::get("city/get", [AdminCityController::class, 'getTableData'])->name("city.get-list-data");

    Route::resource("city", AdminCityController::class);
});
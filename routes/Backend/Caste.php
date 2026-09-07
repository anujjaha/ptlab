<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Caste\AdminCasteController;

Route::group([], function () {
    /*
     * Admin Caste Controller
     */

    // Route for Ajax DataTable
    Route::get("caste/get", [AdminCasteController::class, 'getTableData'])->name("caste.get-list-data");

    Route::resource("caste", AdminCasteController::class);
});
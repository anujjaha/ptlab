<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SubCaste\AdminSubCasteController;

Route::group([], function () {
    /*
     * Admin SubCaste Controller
     */

    // Route for Ajax DataTable
    Route::get("subcaste/get", [AdminSubCasteController::class, 'getTableData'])->name("subcaste.get-list-data");

    Route::resource("subcaste", AdminSubCasteController::class);
});
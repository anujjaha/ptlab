<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SubCasteDivision\AdminSubCasteDivisionController;

Route::group([], function () {
    /*
     * Admin SubCasteDivision Controller
     */

    // Route for Ajax DataTable
    Route::get("subcastedivision/get", [AdminSubCasteDivisionController::class, 'getTableData'])->name("subcastedivision.get-list-data");

    Route::resource("subcastedivision", AdminSubCasteDivisionController::class);
});
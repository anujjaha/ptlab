<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProfileTag\AdminProfileTagController;

Route::group([], function () {
    /*
     * Admin ProfileTag Controller
     */

    // Route for Ajax DataTable
    Route::get("profiletag/get", [AdminProfileTagController::class, 'getTableData'])->name("profiletag.get-list-data");

    Route::resource("profiletag", AdminProfileTagController::class);
});
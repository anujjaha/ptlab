<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Gotra\AdminGotraController;

Route::group([], function () {
    /*
     * Admin Gotra Controller
     */

    // Route for Ajax DataTable
    Route::get("gotra/get", [AdminGotraController::class, 'getTableData'])->name("gotra.get-list-data");

    Route::resource("gotra", AdminGotraController::class);
});
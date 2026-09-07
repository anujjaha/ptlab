<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Religion\AdminReligionController;

Route::group([], function () {
    /*
     * Admin Religion Controller
     */

    // Route for Ajax DataTable
    Route::get("religion/get", [AdminReligionController::class, 'getTableData'])->name("religion.get-list-data");

    Route::resource("religion", AdminReligionController::class);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProfileAddress\AdminProfileAddressController;

Route::group([], function () {
    /*
     * Admin ProfileAddress Controller
     */

    // Route for Ajax DataTable
    Route::get("profileaddress/get", [AdminProfileAddressController::class, 'getTableData'])->name("profileaddress.get-list-data");

    Route::resource("profileaddress", AdminProfileAddressController::class);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Account\AdminAccountController;

Route::group([], function () {
    /*
     * Admin Account Controller
     */

    // Route for Ajax DataTable
    Route::get("account/get", [AdminAccountController::class, 'getTableData'])->name("account.get-list-data");

    Route::resource("account", AdminAccountController::class);
});
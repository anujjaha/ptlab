<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\State\AdminStateController;

Route::group([], function () {
    /*
     * Admin State Controller
     */

    // Route for Ajax DataTable
    Route::get("state/get", [AdminStateController::class, 'getTableData'])->name("state.get-list-data");

    Route::resource("state", AdminStateController::class);
});
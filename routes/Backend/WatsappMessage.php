<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\WatsappMessage\AdminWatsappMessageController;

Route::group([], function () {
    /*
     * Admin WatsappMessage Controller
     */

    // Route for Ajax DataTable
    Route::get("watsappmessage/get", [AdminWatsappMessageController::class, 'getTableData'])->name("watsappmessage.get-list-data");

    Route::resource("watsappmessage", AdminWatsappMessageController::class);
});
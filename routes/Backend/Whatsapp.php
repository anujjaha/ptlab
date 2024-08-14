<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Whatsapp\AdminWhatsappController;

Route::group([], function () {
    /*
     * Admin Whatsapp Controller
     */

    // Route for Ajax DataTable
    Route::get("whatsapp/get", [AdminWhatsappController::class, 'getTableData'])->name("whatsapp.get-list-data");

    Route::resource("whatsapp", AdminWhatsappController::class);
});
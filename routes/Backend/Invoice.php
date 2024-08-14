<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Invoice\AdminInvoiceController;

Route::group([], function () {
    /*
     * Admin Invoice Controller
     */

    // Route for Ajax DataTable
    Route::get("invoice/get", [AdminInvoiceController::class, 'getTableData'])->name("invoice.get-list-data");

    Route::resource("invoice", AdminInvoiceController::class);
});
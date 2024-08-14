<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Report_types\AdminReport_typesController;

Route::group([], function () {
    /*
     * Admin Report_types Controller
     */

    // Route for Ajax DataTable
    Route::get("report_types/get", [AdminReport_typesController::class, 'getTableData'])->name("report_types.get-list-data");

    Route::resource("report_types", AdminReport_typesController::class);
});
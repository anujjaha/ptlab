<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Patient\AdminPatientController;

Route::group([], function () {
    /*
     * Admin Patient Controller
     */

    // Route for Ajax DataTable
    Route::get("patient/get", [AdminPatientController::class, 'getTableData'])->name("patient.get-list-data");

    Route::resource("patient", AdminPatientController::class);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PatientReportDetails\AdminPatientReportDetailsController;

Route::group([], function () {
    /*
     * Admin PatientReportDetails Controller
     */

    // Route for Ajax DataTable
    Route::get("patientreportdetails/get", [AdminPatientReportDetailsController::class, 'getTableData'])->name("patientreportdetails.get-list-data");

    Route::resource("patientreportdetails", AdminPatientReportDetailsController::class);
});
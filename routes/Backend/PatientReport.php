<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PatientReport\AdminPatientReportController;

Route::group([], function () {
    /*
     * Admin PatientReport Controller
     */

    // Route for Ajax DataTable
    Route::get("patientreport/get", [AdminPatientReportController::class, 'getTableData'])->name("patientreport.get-list-data");

    Route::post("patientreport/{id}/upload-report", [AdminPatientReportController::class, 'uploadReport'])->name("patientreport.upload");

    Route::post("patientreport/accept-sample", [AdminPatientReportController::class, 'acceptSample'])->name("patientreport.acceptSample");

    Route::post("patientreport/send-wa-report", [AdminPatientReportController::class, 'sendWaReport'])->name("patientreport.sendWaReport");

    Route::resource("patientreport", AdminPatientReportController::class);
});
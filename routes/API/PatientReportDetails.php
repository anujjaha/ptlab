<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIPatientReportDetailsController;

Route::apiResource('patientreportdetails', APIPatientReportDetailsController::class);
?>
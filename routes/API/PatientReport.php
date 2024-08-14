<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIPatientReportController;

Route::apiResource('patientreport', APIPatientReportController::class);
?>
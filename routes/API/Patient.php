<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIPatientController;

Route::apiResource('patient', APIPatientController::class);
?>
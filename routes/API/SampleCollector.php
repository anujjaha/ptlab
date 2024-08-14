<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APISampleCollectorController;

Route::apiResource('samplecollector', APISampleCollectorController::class);
?>
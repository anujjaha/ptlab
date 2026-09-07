<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIProfileRecognitionController;

Route::apiResource('profilerecognition', APIProfileRecognitionController::class);
?>
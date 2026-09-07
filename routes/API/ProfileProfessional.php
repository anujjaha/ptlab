<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIProfileProfessionalController;

Route::apiResource('profileprofessional', APIProfileProfessionalController::class);
?>
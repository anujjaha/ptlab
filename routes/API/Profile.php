<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIProfileController;

Route::apiResource('profile', APIProfileController::class);
?>
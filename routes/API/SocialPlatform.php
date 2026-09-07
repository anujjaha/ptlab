<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APISocialPlatformController;

Route::apiResource('socialplatform', APISocialPlatformController::class);
?>
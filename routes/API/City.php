<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APICityController;

Route::apiResource('city', APICityController::class);
?>
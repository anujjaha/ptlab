<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIStateController;

Route::apiResource('state', APIStateController::class);
?>
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIGotraController;

Route::apiResource('gotra', APIGotraController::class);
?>
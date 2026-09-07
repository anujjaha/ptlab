<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIProfileTagController;

Route::apiResource('profiletag', APIProfileTagController::class);
?>
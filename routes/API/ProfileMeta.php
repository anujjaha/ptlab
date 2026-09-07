<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIProfileMetaController;

Route::apiResource('profilemeta', APIProfileMetaController::class);
?>
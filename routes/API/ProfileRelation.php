<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIProfileRelationController;

Route::apiResource('profilerelation', APIProfileRelationController::class);
?>
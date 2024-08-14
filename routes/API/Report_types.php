<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIReport_typesController;

Route::apiResource('report_types', APIReport_typesController::class);
?>
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APISubCasteDivisionController;

Route::apiResource('subcastedivision', APISubCasteDivisionController::class);
?>
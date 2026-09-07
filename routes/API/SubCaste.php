<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APISubCasteController;

Route::apiResource('subcaste', APISubCasteController::class);
?>
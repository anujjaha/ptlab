<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APICasteController;

Route::apiResource('caste', APICasteController::class);
?>
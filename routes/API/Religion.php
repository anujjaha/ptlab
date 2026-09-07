<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIReligionController;

Route::apiResource('religion', APIReligionController::class);
?>
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APITagController;

Route::apiResource('tag', APITagController::class);
?>
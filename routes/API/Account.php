<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIAccountController;

Route::apiResource('account', APIAccountController::class);
?>
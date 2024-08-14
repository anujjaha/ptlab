<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIAccount_configController;

Route::apiResource('account_config', APIAccount_configController::class);
?>
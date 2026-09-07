<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIProfileAddressController;

Route::apiResource('profileaddress', APIProfileAddressController::class);
?>
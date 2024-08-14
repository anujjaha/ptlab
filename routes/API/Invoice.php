<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIInvoiceController;

Route::apiResource('invoice', APIInvoiceController::class);
?>
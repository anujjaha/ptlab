<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIWhatsappController;

Route::apiResource('whatsapp', APIWhatsappController::class);
?>
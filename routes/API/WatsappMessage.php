<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIWatsappMessageController;

Route::apiResource('watsappmessage', APIWatsappMessageController::class);
?>
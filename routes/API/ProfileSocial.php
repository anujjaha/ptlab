<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIProfileSocialController;

Route::apiResource('profilesocial', APIProfileSocialController::class);
?>
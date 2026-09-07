<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIProfessionCategoryController;

Route::apiResource('professioncategory', APIProfessionCategoryController::class);
?>
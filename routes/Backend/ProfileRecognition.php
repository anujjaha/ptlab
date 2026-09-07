<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProfileRecognition\AdminProfileRecognitionController;

Route::group([], function () {
    /*
     * Admin ProfileRecognition Controller
     */

    // Route for Ajax DataTable
    Route::get("profilerecognition/get", [AdminProfileRecognitionController::class, 'getTableData'])->name("profilerecognition.get-list-data");

    Route::resource("profilerecognition", AdminProfileRecognitionController::class);
});
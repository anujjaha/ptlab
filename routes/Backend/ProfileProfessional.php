<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProfileProfessional\AdminProfileProfessionalController;

Route::group([], function () {
    /*
     * Admin ProfileProfessional Controller
     */

    // Route for Ajax DataTable
    Route::get("profileprofessional/get", [AdminProfileProfessionalController::class, 'getTableData'])->name("profileprofessional.get-list-data");

    Route::resource("profileprofessional", AdminProfileProfessionalController::class);
});
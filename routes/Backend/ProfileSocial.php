<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProfileSocial\AdminProfileSocialController;

Route::group([], function () {
    /*
     * Admin ProfileSocial Controller
     */

    // Route for Ajax DataTable
    Route::get("profilesocial/get", [AdminProfileSocialController::class, 'getTableData'])->name("profilesocial.get-list-data");

    Route::resource("profilesocial", AdminProfileSocialController::class);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProfileMeta\AdminProfileMetaController;

Route::group([], function () {
    /*
     * Admin ProfileMeta Controller
     */

    // Route for Ajax DataTable
    Route::get("profilemeta/get", [AdminProfileMetaController::class, 'getTableData'])->name("profilemeta.get-list-data");

    Route::resource("profilemeta", AdminProfileMetaController::class);
});
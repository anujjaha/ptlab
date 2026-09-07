<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProfileRelation\AdminProfileRelationController;

Route::group([], function () {
    /*
     * Admin ProfileRelation Controller
     */

    // Route for Ajax DataTable
    Route::get("profilerelation/get", [AdminProfileRelationController::class, 'getTableData'])->name("profilerelation.get-list-data");

    Route::resource("profilerelation", AdminProfileRelationController::class);
});
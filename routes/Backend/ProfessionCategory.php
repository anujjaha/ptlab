<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProfessionCategory\AdminProfessionCategoryController;

Route::group([], function () {
    /*
     * Admin ProfessionCategory Controller
     */

    // Route for Ajax DataTable
    Route::get("professioncategory/get", [AdminProfessionCategoryController::class, 'getTableData'])->name("professioncategory.get-list-data");

    Route::resource("professioncategory", AdminProfessionCategoryController::class);
});
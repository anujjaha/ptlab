<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Tag\AdminTagController;

Route::group([], function () {
    /*
     * Admin Tag Controller
     */

    // Route for Ajax DataTable
    Route::get("tag/get", [AdminTagController::class, 'getTableData'])->name("tag.get-list-data");

    Route::resource("tag", AdminTagController::class);
});
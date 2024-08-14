<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SampleCollector\AdminSampleCollectorController;

Route::group([], function () {
    /*
     * Admin SampleCollector Controller
     */

    // Route for Ajax DataTable
    Route::get("samplecollector/get", [AdminSampleCollectorController::class, 'getTableData'])->name("samplecollector.get-list-data");

    Route::resource("samplecollector", AdminSampleCollectorController::class);
});
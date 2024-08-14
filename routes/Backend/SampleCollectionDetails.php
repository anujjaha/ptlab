<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SampleCollectionDetails\AdminSampleCollectionDetailsController;

Route::group([], function () {
    /*
     * Admin SampleCollectionDetails Controller
     */

    // Route for Ajax DataTable
    Route::get("samplecollectiondetails/get", [AdminSampleCollectionDetailsController::class, 'getTableData'])->name("samplecollectiondetails.get-list-data");

    Route::resource("samplecollectiondetails", AdminSampleCollectionDetailsController::class);
});
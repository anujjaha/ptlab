<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Account_config\AdminAccount_configController;

Route::group([], function () {
    /*
     * Admin Account_config Controller
     */

    // Route for Ajax DataTable
    Route::get("account_config/get", [AdminAccount_configController::class, 'getTableData'])->name("account_config.get-list-data");

    Route::resource("account_config", AdminAccount_configController::class);
});
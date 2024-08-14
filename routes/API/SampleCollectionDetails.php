<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APISampleCollectionDetailsController;

Route::apiResource('samplecollectiondetails', APISampleCollectionDetailsController::class);
?>
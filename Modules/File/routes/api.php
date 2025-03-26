<?php

use Illuminate\Support\Facades\Route;
use Modules\File\Http\Controllers\FileController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('file', FileController::class)->names('file');
});

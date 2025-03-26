<?php

use Illuminate\Support\Facades\Route;
use Modules\Module\Http\Controllers\ModuleController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('module', ModuleController::class)->names('module');
});

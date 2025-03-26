<?php

use Illuminate\Support\Facades\Route;
use Modules\Module\Http\Controllers\ModuleController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('module', ModuleController::class)->names('module');
});

<?php

use Illuminate\Support\Facades\Route;
use Modules\Plan\Http\Controllers\PlanController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('plan', PlanController::class)->names('plan');
});

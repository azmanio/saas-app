<?php

use Illuminate\Support\Facades\Route;
use Modules\HelpdeskTicket\Http\Controllers\HelpdeskTicketController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('helpdeskticket', HelpdeskTicketController::class)->names('helpdeskticket');
});

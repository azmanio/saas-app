<?php

use Illuminate\Support\Facades\Route;
use Modules\HelpdeskTicket\Http\Controllers\HelpdeskTicketController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('helpdeskticket', HelpdeskTicketController::class)->names('helpdeskticket');
});

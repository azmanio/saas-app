<?php

namespace Modules\HelpdeskTicket\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\HelpdeskTicket\Database\Factories\HelpdeskTicketFactory;

class HelpdeskTicket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): HelpdeskTicketFactory
    // {
    //     // return HelpdeskTicketFactory::new();
    // }
}

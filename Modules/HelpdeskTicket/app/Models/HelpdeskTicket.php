<?php

namespace Modules\HelpdeskTicket\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Models\User;
// use Modules\HelpdeskTicket\Database\Factories\HelpdeskTicketFactory;

class HelpdeskTicket extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // protected static function newFactory(): HelpdeskTicketFactory
    // {
    //     // return HelpdeskTicketFactory::new();
    // }
}
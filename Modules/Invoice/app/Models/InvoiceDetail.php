<?php

namespace Modules\Invoice\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Invoice\Database\Factories\InvoiceDetailFactory;

class InvoiceDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): InvoiceDetailFactory
    // {
    //     // return InvoiceDetailFactory::new();
    // }
}

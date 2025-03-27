<?php

namespace Modules\Invoice\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Invoice\Database\Factories\InvoiceDetailFactory;

class InvoiceDetail extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    // protected static function newFactory(): InvoiceDetailFactory
    // {
    //     // return InvoiceDetailFactory::new();
    // }
}

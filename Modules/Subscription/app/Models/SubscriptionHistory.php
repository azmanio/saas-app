<?php

namespace Modules\Subscription\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Subscription\Database\Factories\SubscriptionHistoryFactory;

class SubscriptionHistory extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    // protected static function newFactory(): SubscriptionHistoryFactory
    // {
    //     // return SubscriptionHistoryFactory::new();
    // }
}
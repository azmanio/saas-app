<?php

namespace Modules\Subscription\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Plan\Models\Plan;
use Modules\User\Models\User;
// use Modules\Subscription\Database\Factories\SubscriptionFactory;

class Subscription extends Model
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

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    // protected static function newFactory(): SubscriptionFactory
    // {
    //     // return SubscriptionFactory::new();
    // }
}

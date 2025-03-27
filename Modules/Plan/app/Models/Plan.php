<?php

namespace Modules\Plan\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Feature\Models\Feature;
// use Modules\Plan\Database\Factories\PlanFactory;

class Plan extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'plan_features');
    }

    // protected static function newFactory(): PlanFactory
    // {
    //     // return PlanFactory::new();
    // }
}

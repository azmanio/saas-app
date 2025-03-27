<?php

namespace Modules\Feature\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
// use Modules\Feature\Database\Factories\PlanFeatureFactory;

class PlanFeature extends Pivot
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    protected $table = 'plan_features';

    // protected static function newFactory(): PlanFeatureFactory
    // {
    //     // return PlanFeatureFactory::new();
    // }
}

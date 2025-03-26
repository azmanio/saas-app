<?php

namespace Modules\Feature\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Feature\Database\Factories\PlanFeatureFactory;

class PlanFeature extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): PlanFeatureFactory
    // {
    //     // return PlanFeatureFactory::new();
    // }
}

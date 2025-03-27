<?php

namespace Modules\Feature\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Plan\Models\Plan;
// use Modules\Feature\Database\Factories\FeatureFactory;

class Feature extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function plan()
    {
        return $this->belongsToMany(Plan::class, 'plan_features');
    }

    // protected static function newFactory(): FeatureFactory
    // {
    //     // return FeatureFactory::new();
    // }
}

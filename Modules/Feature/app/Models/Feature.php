<?php

namespace Modules\Feature\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Feature\Database\Factories\FeatureFactory;

class Feature extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): FeatureFactory
    // {
    //     // return FeatureFactory::new();
    // }
}

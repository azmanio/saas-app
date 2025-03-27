<?php

namespace Modules\Module\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Module\Database\Factories\ModuleFactory;

class Module extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): ModuleFactory
    // {
    //     // return ModuleFactory::new();
    // }
}
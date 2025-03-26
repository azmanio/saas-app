<?php

namespace Modules\Module\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Module\Database\Factories\ModuleFactory;

class Module extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): ModuleFactory
    // {
    //     // return ModuleFactory::new();
    // }
}

<?php

namespace Modules\Module\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Module\Models\Module::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}


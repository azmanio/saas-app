<?php

namespace Modules\Plan\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Plan\Models\Plan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}


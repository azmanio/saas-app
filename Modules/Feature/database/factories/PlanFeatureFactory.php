<?php

namespace Modules\Feature\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Feature\Models\PlanFeature::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}


<?php

namespace Modules\Subscription\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Subscription\Models\Subscription::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}


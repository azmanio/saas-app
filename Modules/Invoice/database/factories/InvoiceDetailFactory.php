<?php

namespace Modules\Invoice\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Invoice\Models\InvoiceDetail::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}


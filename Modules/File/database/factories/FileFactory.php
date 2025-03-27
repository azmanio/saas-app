<?php

namespace Modules\File\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\File\Models\File::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}


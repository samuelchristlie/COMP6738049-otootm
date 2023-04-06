<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SchoolClass;

class SchoolClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = SchoolClass::class;

    public function definition()
    {
        return [
            'name' => implode(' ', $this->faker->words(2)),
            // 'teacher_id' => $this->faker->numberBetween($min = 1, $max = 1000)
        ];
    }
}

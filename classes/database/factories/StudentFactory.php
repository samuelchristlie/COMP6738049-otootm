<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Student::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            // 'class_id' => $this->faker->numberBetween($min = 1, $max = 1000)
        ];
    }
}

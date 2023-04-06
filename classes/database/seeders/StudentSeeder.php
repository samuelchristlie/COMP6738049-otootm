<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\SchoolClass;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = SchoolClass::all();

        foreach ($classes as $class) {
            Student::factory()->count(5)->create([
                'class_id' => $class->id,
            ]);
        }
    }
}

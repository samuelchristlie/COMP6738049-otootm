<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolClass;
use App\Models\Teacher;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = Teacher::all();

        foreach ($teachers as $teacher) {
            SchoolClass::factory()->create([
                'teacher_id' => $teacher->id
            ]);
        }
    }
}

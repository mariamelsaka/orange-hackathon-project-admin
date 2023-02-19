<?php

namespace Database\Factories;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Course::class;
    public function definition()
    {
        return [
            //
            'course_name'=>$this->faker->unique->text(maxNbChars:100),
            'course_level'=>$this->faker->unique->text(maxNbChars:100),
        ];
    }
}

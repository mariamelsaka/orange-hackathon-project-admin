<?php

namespace Database\Factories;
use App\Models\Revision;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Revision>
 */
class RevisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model=Revision::class;
    public function definition()
    {
        return [
            //
            'student_degree'=>$this->faker->randomFloat(2,1,1000),
            'total_right_degree'=>$this->faker->randomFloat(2,1,1000),
            'total_wrong_degree'=>$this->faker->randomFloat(2,1,1000),
        ];
    }
}

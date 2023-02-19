<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Question::class;
    public function definition()
    {
        return [
            //
            'question_content' => $this->faker->unique()->text(10),
            'question_answer' => $this->faker->text(10 ),


        ];
    }
}

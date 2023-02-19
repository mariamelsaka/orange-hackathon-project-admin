<?php

namespace Database\Factories;

use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gender>
 */
class GenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model =Gender::class;
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->unique()->text(10),
        ];
    }
}

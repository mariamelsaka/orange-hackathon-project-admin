<?php

namespace Database\Factories;

use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainer>
 */
class TrainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Trainer::class;
    public function definition()
    {
        return [
            'username' => $this->faker->unique()->text(10),
            'name' => $this->faker->text(10 ),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'address' => $this->faker->unique()->address,
            'email' => $this->faker->unique()->safeEmail,
            'password'=>bcrypt('123456'),
            //
        ];
    }
}

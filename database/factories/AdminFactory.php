<?php

namespace Database\Factories;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Admin::class;
    public function definition()
    {
//         $image_id=Image::pluck('id')->toArray(); //btgeeb kol id el mawgoodah
//         $index2=array_rand([$image_id]);
//         $gender_id=Gender::pluck('id')->toArray();
//         $index=array_rand([$gender_id]);

        return [
            'username' => $this->faker->unique()->text(10),
            'name' => $this->faker->text(10 ),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'address' => $this->faker->unique()->address,
            'email' => $this->faker->unique('gg')->safeEmail,
            'password'=>bcrypt('123456'),
            'role' => $this->faker->text(10),
           // 'gender_id'=>$gender_id[$index],
             //'image_id'=>$image_id[$index2],

        ];

    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Gender;
use App\Models\Image;
use App\Models\Question;
use App\Models\Revision;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Database\Seeder;
// use App\Model\User;
// use Illuminate\Support\Facades\Hash;
// use App\Model\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([

            AdminSeeder::class,
            CategorySeeder::class,
            CourseSeeder::class,
            GenderSeeder::class,
            ImageSeeder::class,
            //QuestionsSeeder::class,
            RevisionSeeder::class,
            StudentSeeder::class,
            TrainerSeeder::class,

            /*EnrollSeeder::class,
            ExamSeeder::class,
            GenderSeeder::class,

            ImageSeeder::class,
            QuestionSeeder::class,
            RevisionSeeder::class,
            StudentSeeder::class,
            TeachSeeder::class,
            TrainerSeeder::class,*/
        ]);
    }
}

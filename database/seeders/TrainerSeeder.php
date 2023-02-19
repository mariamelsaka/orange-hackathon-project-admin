<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('trainers')->delete();
        Trainer::factory()->count(10)->create();
    }
}

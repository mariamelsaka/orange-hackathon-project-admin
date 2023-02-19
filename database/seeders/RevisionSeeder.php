<?php

namespace Database\Seeders;

use App\Models\Revision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('revisions')->delete();
       Revision::factory()->count(10)->create();
    }
}

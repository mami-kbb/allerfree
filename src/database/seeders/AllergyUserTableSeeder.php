<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergyUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allergy_user')->insert([
            [
                'user_id' => 1,
                'allergy_id' => 2,
            ],
            [
                'user_id' => 1,
                'allergy_id' => 3,
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergyRecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allergy_recipe')->insert([
            [
                'recipe_id' => 1,
                'allergy_id' => 2,
            ],
            [
                'recipe_id' => 1,
                'allergy_id' => 3,
            ],
            [
                'recipe_id' => 1,
                'allergy_id' => 17,
            ],
            [
                'recipe_id' => 1,
                'allergy_id' => 20,
            ],
            [
                'recipe_id' => 1,
                'allergy_id' => 21,
            ],
            [
                'recipe_id' => 1,
                'allergy_id' => 23,
            ],
            [
                'recipe_id' => 2,
                'allergy_id' => 3,
            ],
            [
                'recipe_id' => 2,
                'allergy_id' => 21,
            ],
        ]);
    }
}

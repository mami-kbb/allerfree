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
                'allergy_id' => 3,
            ],
            [
                'recipe_id' => 1,
                'allergy_id' => 7,
            ],
            [
                'recipe_id' => 2,
                'allergy_id' => 2,
            ],
            [
                'recipe_id' => 2,
                'allergy_id' => 3,
            ],
            [
                'recipe_id' => 2,
                'allergy_id' => 4,
            ],
            [
                'recipe_id' => 2,
                'allergy_id' => 9,
            ],
            [
                'recipe_id' => 2,
                'allergy_id' => 10,
            ],
            [
                'recipe_id' => 2,
                'allergy_id' => 15,
            ],
            [
                'recipe_id' => 2,
                'allergy_id' => 25,
            ],
            [
                'recipe_id' => 3,
                'allergy_id' => 2,
            ],
            [
                'recipe_id' => 4,
                'allergy_id' => 4,
            ],
            [
                'recipe_id' => 4,
                'allergy_id' => 17,
            ],
            [
                'recipe_id' => 4,
                'allergy_id' => 21,
            ],
            [
                'recipe_id' => 5,
                'allergy_id' => 4,
            ],
            [
                'recipe_id' => 5,
                'allergy_id' => 18,
            ],
            [
                'recipe_id' => 5,
                'allergy_id' => 24,
            ],
            [
                'recipe_id' => 6,
                'allergy_id' => 2,
            ],
            [
                'recipe_id' => 6,
                'allergy_id' => 3,
            ],
            [
                'recipe_id' => 6,
                'allergy_id' => 4,
            ],
            [
                'recipe_id' => 6,
                'allergy_id' => 24,
            ],
            [
                'recipe_id' => 7,
                'allergy_id' => 2,
            ],
            [
                'recipe_id' => 7,
                'allergy_id' => 4,
            ],
            [
                'recipe_id' => 7,
                'allergy_id' => 21,
            ],
            [
                'recipe_id' => 7,
                'allergy_id' => 24,
            ],
            [
                'recipe_id' => 8,
                'allergy_id' => 4,
            ],
            [
                'recipe_id' => 8,
                'allergy_id' => 21,
            ],
            [
                'recipe_id' => 8,
                'allergy_id' => 29,
            ],
            [
                'recipe_id' => 9,
                'allergy_id' => 2,
            ],
            [
                'recipe_id' => 9,
                'allergy_id' => 4,
            ],
            [
                'recipe_id' => 9,
                'allergy_id' => 21,
            ],
            [
                'recipe_id' => 9,
                'allergy_id' => 22,
            ],
            [
                'recipe_id' => 10,
                'allergy_id' => 4,
            ],
            [
                'recipe_id' => 10,
                'allergy_id' => 21,
            ],
        ]);
    }
}

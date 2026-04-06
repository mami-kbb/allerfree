<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientRecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient_recipe')->insert([
            [
                'recipe_id' => 1,
                'ingredient_id' => 1,
                'quantity' => '2個',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 2,
                'quantity' => '1個',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 3,
                'quantity' => '1/2本',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 4,
                'quantity' => '200g',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 5,
                'quantity' => '400ml',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 6,
                'quantity' => '4かけ',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 10,
                'quantity' => '大さじ2',
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 7,
                'quantity' => '1枚',
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 8,
                'quantity' => '大さじ１',
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 9,
                'quantity' => '大さじ2',
            ],
        ]);
    }
}

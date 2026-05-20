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
                'quantity' => '1パック',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 2,
                'quantity' => '5個',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 3,
                'quantity' => '1パック',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 4,
                'quantity' => '100ml',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 5,
                'quantity' => '10g',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 6,
                'quantity' => '1欠片',
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 7,
                'quantity' => '適量',
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 7,
                'quantity' => '4枚(約200g)',
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 8,
                'quantity' => '2個',
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 5,
                'quantity' => '100g',
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 9,
                'quantity' => '2個',
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 10,
                'quantity' => '40g',
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 11,
                'quantity' => '70g',
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 12,
                'quantity' => '適量',
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 17,
                'quantity' => '5個分',
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 50,
                'quantity' => '110g',
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 16,
                'quantity' => '80ml',
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 19,
                'quantity' => '80ml',
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 13,
                'quantity' => '130g',
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 18,
                'quantity' => '7個分',
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 15,
                'quantity' => '200cc',
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 51,
                'quantity' => '20g',
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 20,
                'quantity' => '小さじ1',
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 21,
                'quantity' => '1パック',
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 22,
                'quantity' => '150g',
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 23,
                'quantity' => '1/2個',
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 19,
                'quantity' => '130cc',
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 24,
                'quantity' => '大さじ1',
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 26,
                'quantity' => '小さじ2',
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 10,
                'quantity' => '小さじ2',
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 25,
                'quantity' => '小さじ1',
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 27,
                'quantity' => '少々',
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 28,
                'quantity' => '適量',
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 29,
                'quantity' => '大きめの葉4～5枚',
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 30,
                'quantity' => '3個',
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 31,
                'quantity' => '1本',
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 32,
                'quantity' => '大さじ2',
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 33,
                'quantity' => '大さじ1～2',
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 24,
                'quantity' => '小さじ1/2',
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 35,
                'quantity' => '小さじ1',
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 25,
                'quantity' => '大さじ1',
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 26,
                'quantity' => '大さじ1',
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 36,
                'quantity' => '8枚切りを2枚',
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 37,
                'quantity' => '1/2個',
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 38,
                'quantity' => '適量',
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 40,
                'quantity' => '3個',
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 41,
                'quantity' => '150g',
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 10,
                'quantity' => '大さじ1.5',
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 24,
                'quantity' => '大さじ1',
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 39,
                'quantity' => '適量',
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 42,
                'quantity' => '適量',
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 43,
                'quantity' => '1/2本',
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 44,
                'quantity' => '1本',
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 45,
                'quantity' => '1枚',
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 46,
                'quantity' => '1袋',
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 47,
                'quantity' => '1パック',
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 10,
                'quantity' => '大さじ1',
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 24,
                'quantity' => '大さじ2～3',
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 25,
                'quantity' => '大さじ2',
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 27,
                'quantity' => '小さじ2',
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 19,
                'quantity' => '400ml',
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 48,
                'quantity' => '1枚',
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 23,
                'quantity' => '1/2個',
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 44,
                'quantity' => '1/3本',
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 47,
                'quantity' => '2個',
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 9,
                'quantity' => '3個',
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 24,
                'quantity' => '大さじ2',
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 25,
                'quantity' => '大さじ2',
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 26,
                'quantity' => '大さじ1',
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 10,
                'quantity' => '大さじ1',
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 27,
                'quantity' => '小さじ1',
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 19,
                'quantity' => '160ml',
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 49,
                'quantity' => '1/8個',
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 19,
                'quantity' => '100ml',
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 24,
                'quantity' => '大さじ1',
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 25,
                'quantity' => '大さじ1',
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 26,
                'quantity' => '大さじ1',
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 10,
                'quantity' => '小さじ1',
            ],
        ]);
    }
}

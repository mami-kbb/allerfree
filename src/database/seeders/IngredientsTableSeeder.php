<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            [
                'name' => 'じゃがいも'
            ],
            [
                'name' => '玉ねぎ'
            ],
            [
                'name' => 'にんじん'
            ],
            [
                'name' => '豚肉'
            ],
            [
                'name' => '水'
            ],
            [
                'name' => 'カレールー'
            ],
            [
                'name' => '鶏もも肉'
            ],
            [
                'name' => '塩麹'
            ],
            [
                'name' => '小麦粉'
            ],
            [
                'name' => 'はちみつ'
            ],
        ]);
    }
}

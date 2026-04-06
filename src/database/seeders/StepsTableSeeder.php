<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('steps')->insert([
            [
                'recipe_id' => 1,
                'step_number' => 1,
                'content' => '玉ねぎは薄切り、にんじんは幅5mmの半月切り、じゃがいもは1口大に切る',
            ],
            [
                'recipe_id' => 1,
                'step_number' => 2,
                'content' => '豚肉は食べやすい大きさに切る',
            ],
            [
                'recipe_id' => 1,
                'step_number' => 3,
                'content' => 'お鍋に油を熱し、切った具材を炒める',
            ],
            [
                'recipe_id' => 1,
                'step_number' => 4,
                'content' => '全体に油が回ったら水を入れて灰汁をとり、具材が柔らかくなるまで弱火～中火で煮込む（沸騰後約15分）',
            ],
            [
                'recipe_id' => 1,
                'step_number' => 5,
                'content' => '1度火を止めて、ルーを割り入れて溶かす。',
            ],
            [
                'recipe_id' => 1,
                'step_number' => 6,
                'content' => '時々かき混ぜながらとろみがつくまで弱火で煮込む（約10分）',
            ],
            [
                'recipe_id' => 1,
                'step_number' => 7,
                'content' => '最後にはちみつを入れて全体に混ぜる',
            ],
            [
                'recipe_id' => 2,
                'step_number' => 1,
                'content' => '鶏もも肉をひと口大に切り、ポリ袋などに入れ、塩麹を入れて揉みこみ、30分～半日冷蔵庫で寝かせる',
            ],
            [
                'recipe_id' => 2,
                'step_number' => 2,
                'content' => 'ポリ袋に小麦粉を入れ全体になじませる',
            ],
            [
                'recipe_id' => 2,
                'step_number' => 3,
                'content' => '熱した揚げ油で揚げる',
            ],
        ]);
    }
}

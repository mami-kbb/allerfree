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
                'name' => 'えび'
            ],
            [
                'name' => 'ミニトマト'
            ],
            [
                'name' => 'マッシュルーム'
            ],
            [
                'name' => 'オリーブオイル'
            ],
            [
                'name' => 'バター'
            ],
            [
                'name' => 'ニンニク'
            ],
            [
                'name' => '塩'
            ],
            [
                'name' => '板チョコ'
            ],
            [
                'name' => '卵'
            ],
            [
                'name' => '砂糖'
            ],
            [
                'name' => '薄力粉'
            ],
            [
                'name' => 'ナッツ'
            ],
            [
                'name' => '米粉'
            ],
            [
                'name' => '豆乳'
            ],
            [
                'name' => '豆乳クリーム'
            ],
            [
                'name' => 'こめ油'
            ],
            [
                'name' => '卵黄'
            ],
            [
                'name' => '卵白'
            ],
            [
                'name' => '水'
            ],
            [
                'name' => 'いちご'
            ],
            [
                'name' => '牛肉'
            ],
            [
                'name' => 'たまねぎ'
            ],
            [
                'name' => '醤油'
            ],
            [
                'name' => 'みりん'
            ],
            [
                'name' => '酒'
            ],
            [
                'name' => 'だしの素'
            ],
            [
                'name' => '生姜'
            ],
            [
                'name' => 'キャベツ'
            ],
            [
                'name' => 'ピーマン'
            ],
            [
                'name' => '長ネギ'
            ],
            [
                'name' => '豚バラ'
            ],
            [
                'name' => '味噌'
            ],
            [
                'name' => '食パン'
            ],
            [
                'name' => 'トマト'
            ],
            [
                'name' => 'レタス'
            ],
            [
                'name' => 'マヨネーズ'
            ],
            [
                'name' => 'じゃがいも'
            ],
            [
                'name' => '豚ひき肉'
            ],
            [
                'name' => 'パン粉'
            ],
            [
                'name' => '大根'
            ],
            [
                'name' => 'にんじん'
            ],
            [
                'name' => 'こんにゃく'
            ],
            [
                'name' => 'ちくわ'
            ],
            [
                'name' => 'しいたけ'
            ],
            [
                'name' => '鶏もも肉'
            ],
            [
                'name' => 'かぼちゃ'
            ],
        ]);
    }
}

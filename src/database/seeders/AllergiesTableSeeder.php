<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allergies')->insert ([
            [
                'name' => '卵',
            ],
            [
                'name' => '乳成分',
            ],
            [
                'name' => '小麦',
            ],
            [
                'name' => 'そば',
            ],
            [
                'name' => '落花生（ピーナッツ）',
            ],
            [
                'name' => 'えび',
            ],
            [
                'name' => 'かに',
            ],
            [
                'name' => 'くるみ',
            ],
            [
                'name' => 'アーモンド',
            ],
            [
                'name' => 'あわび',
            ],
            [
                'name' => 'いか',
            ],
            [
                'name' => 'いくら',
            ],
            [
                'name' => 'オレンジ',
            ],
            [
                'name' => 'カシューナッツ',
            ],
            [
                'name' => 'キウイフルーツ',
            ],
            [
                'name' => '牛肉',
            ],
            [
                'name' => 'ごま',
            ],
            [
                'name' => 'さけ',
            ],
            [
                'name' => 'さば',
            ],
            [
                'name' => '大豆',
            ],
            [
                'name' => '鶏肉',
            ],
            [
                'name' => 'バナナ',
            ],
            [
                'name' => '豚肉',
            ],
            [
                'name' => 'マカダミアナッツ',
            ],
            [
                'name' => 'もも',
            ],
            [
                'name' => 'やまいも',
            ],
            [
                'name' => 'りんご',
            ],
            [
                'name' => 'ゼラチン',
            ],
            [
                'name' => '該当なし',
            ],
        ]);
    }
}

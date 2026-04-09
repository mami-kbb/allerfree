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
                'name' => '該当なし',
                'is_selectable' => false,
            ],
            [
                'name' => '卵',
                'is_selectable' => true,
            ],
            [
                'name' => '乳成分',
                'is_selectable' => true,
            ],
            [
                'name' => '小麦',
                'is_selectable' => true,
            ],
            [
                'name' => 'そば',
                'is_selectable' => true,
            ],
            [
                'name' => '落花生（ピーナッツ）',
                'is_selectable' => true,
            ],
            [
                'name' => 'えび',
                'is_selectable' => true,
            ],
            [
                'name' => 'かに',
                'is_selectable' => true,
            ],
            [
                'name' => 'くるみ',
                'is_selectable' => true,
            ],
            [
                'name' => 'アーモンド',
                'is_selectable' => true,
            ],
            [
                'name' => 'あわび',
                'is_selectable' => true,
            ],
            [
                'name' => 'いか',
                'is_selectable' => true,
            ],
            [
                'name' => 'いくら',
                'is_selectable' => true,
            ],
            [
                'name' => 'オレンジ',
                'is_selectable' => true,
            ],
            [
                'name' => 'カシューナッツ',
                'is_selectable' => true,
            ],
            [
                'name' => 'キウイフルーツ',
                'is_selectable' => true,
            ],
            [
                'name' => '牛肉',
                'is_selectable' => true,
            ],
            [
                'name' => 'ごま',
                'is_selectable' => true,
            ],
            [
                'name' => 'さけ',
                'is_selectable' => true,
            ],
            [
                'name' => 'さば',
                'is_selectable' => true,
            ],
            [
                'name' => '大豆',
                'is_selectable' => true,
            ],
            [
                'name' => '鶏肉',
                'is_selectable' => true,
            ],
            [
                'name' => 'バナナ',
                'is_selectable' => true,
            ],
            [
                'name' => '豚肉',
                'is_selectable' => true,
            ],
            [
                'name' => 'マカダミアナッツ',
                'is_selectable' => true,
            ],
            [
                'name' => 'もも',
                'is_selectable' => true,
            ],
            [
                'name' => 'やまいも',
                'is_selectable' => true,
            ],
            [
                'name' => 'りんご',
                'is_selectable' => true,
            ],
            [
                'name' => 'ゼラチン',
                'is_selectable' => true,
            ],
        ]);
    }
}

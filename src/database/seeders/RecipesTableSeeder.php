<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disk = Storage::disk('public');

        $disk->makeDirectory('images');

        $images = [
            'ajillo.jpg',
            'browny.jpg',
            'cake.jpg',
            'gyudon.jpg',
            'hoikoro.jpg',
            'hotsand.jpg',
            'korokke.jpg',
            'nimono.jpg',
            'oyakodon.jpg',
            'pumpkin.jpg',
        ];

        foreach ($images as $image) {
            $source = resource_path('sample-images/' .$image);
            $dest = 'images/' . $image;

            if (File::exists($source) && !$disk->exists($dest)) {
                $disk->put($dest, File::get($source));
            }
        }

        DB::table('recipes')->insert([
            [
                'user_id' => 1,
                'name' => 'エビのアヒージョ',
                'image' => 'images/ajillo.jpg',
                'description' => 'おいしいスペイン料理のアヒージョです。',
                'servings' => '2人分',
                'tips' => 'お皿の大きさに合わせてオイルの量を調節してください。'
            ],
            [
                'user_id' => 1,
                'name' => 'チョコブラウニー',
                'image' => 'images/browny.jpg',
                'description' => '甘くておいしいブラウニーです。',
                'servings' => '12×12cm型 1枚分',
                'tips' => '甘さは砂糖の量で調節してください。'
            ],
            [
                'user_id' => 2,
                'name' => '幸せのショートケーキ',
                'image' => 'images/cake.jpg',
                'description' => '乳アレルギーの息子のために豆乳を使用して作りました。',
                'servings' => '直径18cm型',
                'tips' => 'クリームはレモン果汁を入れることで、さっぱりし溶けにくくなります。'
            ],
            [
                'user_id' => 2,
                'name' => '牛丼',
                'image' => 'images/gyudon.jpg',
                'description' => '子どもも大好き牛丼',
                'servings' => '1人前',
                'tips' => '煮詰めすぎると味が濃くなるのでお好みで調整してください。'
            ],
            [
                'user_id' => 1,
                'name' => '素いらず！本格回鍋肉',
                'image' => 'images/hoikoro.jpg',
                'description' => 'おうちにあるものだけで簡単に作れる本格回鍋肉です',
                'servings' => '4人前',
                'tips' => '生姜を入れるのがポイントです。'
            ],
            [
                'user_id' => 1,
                'name' => 'アレンジいろいろホットサンド',
                'image' => 'images/hotsand.jpg',
                'description' => '朝ごはんを手抜きしたいときによく作ります',
                'servings' => '1人前',
                'tips' => '今回はトマトとレタスで作りましたが、ほかの具も挑戦してみてください。'
            ],
            [
                'user_id' => 2,
                'name' => 'ほくほくコロッケ',
                'image' => 'images/korokke.jpg',
                'description' => '少ない油で簡単コロッケ',
                'servings' => '4個分',
                'tips' => 'レンジを使うことで時短になります。'
            ],
            [
                'user_id' => 1,
                'name' => '味しみしみ煮物',
                'image' => 'images/nimono.jpg',
                'description' => '懐かしいホッとする味の煮物です。',
                'servings' => '2人前',
                'tips' => '冷ますときに具材に味がよくしみ込みます'
            ],
            [
                'user_id' => 2,
                'name' => '簡単親子丼',
                'image' => 'images/oyakodon.jpg',
                'description' => '簡単に済ませたい休日によく作ります。',
                'servings' => '2人前',
                'tips' => 'にんじんやシイタケを入れることで栄養価がUPします。'
            ],
            [
                'user_id' => 1,
                'name' => '時短かぼちゃの煮つけ',
                'image' => 'images/pumpkin.jpg',
                'description' => '忙しい朝のお弁当作りの救世主です。',
                'servings' => '2人前～',
                'tips' => '固い場合は追加でレンジで温めてください。'
            ],
        ]);
    }
}

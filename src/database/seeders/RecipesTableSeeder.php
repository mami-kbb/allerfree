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
            'curry.png',
            'karaage.png',
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
                'name' => 'カレーライス',
                'image' => 'images/curry.png',
                'description' => '子どもに大人気のカレーです',
                'servings' => 4,
                'tips' => 'はちみつを入れることでまろやかさが出ます。'
            ],
            [
                'user_id' => 1,
                'name' => '塩麹から揚げ',
                'image' => 'images/karaage.png',
                'description' => '鶏むね肉でも柔らかい唐揚げです。',
                'servings' => 2,
                'tips' => '鶏肉を塩麹に漬けることでお肉が柔らかくなります。'
            ],
        ]);
    }
}

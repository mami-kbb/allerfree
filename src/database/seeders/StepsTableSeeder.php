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
                'content' => 'マッシュルームは食べやすい大きさに切る。ミニトマトとむきえびはそのまま。ニンニクはみじん切りにする。',
            ],
            [
                'recipe_id' => 1,
                'step_number' => 2,
                'content' => '小さい鍋にオリーブオイルを入れ、ニンニクを入れて弱火でじっくりオイルに香りを移す。',
            ],
            [
                'recipe_id' => 1,
                'step_number' => 3,
                'content' => '塩とバターを入れ、オイルの味を整える。',
            ],
            [
                'recipe_id' => 1,
                'step_number' => 4,
                'content' => 'えびとマッシュルームとミニトマトを入れて2～3分煮たら出来上がり',
            ],
            [
                'recipe_id' => 2,
                'step_number' => 1,
                'content' => '耐熱ボウルにチョコレートを割り入れバターと合わせ、ふんわりラップをかける。レンジで600wで1分30秒加熱し溶かす。※湯せんでもＯＫ',
            ],
            [
                'recipe_id' => 2,
                'step_number' => 2,
                'content' => '(オーブンを180℃に予熱する)溶けたら、卵を割り入れ、砂糖を加え、泡だて器でよく混ぜ合わせる。',
            ],
            [
                'recipe_id' => 2,
                'step_number' => 3,
                'content' => '最後にふるった薄力粉を加えて、ヘラでさっくり混ぜ合わせる。ナッツを入れる場合はここで入れて混ぜ合わせる。',
            ],
            [
                'recipe_id' => 2,
                'step_number' => 4,
                'content' => '混ぜ合わせた生地を型に流し込みヘラで平らに伸ばし、180℃に予熱したオーブンで20～25分焼く。',
            ],
            [
                'recipe_id' => 2,
                'step_number' => 5,
                'content' => '焼けたら粗熱をとり、型から外し、冷めたらお好みのサイズにカットして完成。',
            ],
            [
                'recipe_id' => 3,
                'step_number' => 1,
                'content' => 'オーブンを190℃に予熱し、型にオーブンシートをセットする。',
            ],
            [
                'recipe_id' => 3,
                'step_number' => 2,
                'content' => 'ボウルに卵黄を入れて、砂糖の1/3量を加え泡だて器ですり混ぜます。さらにこめ油、水の順に加えて混ぜます。',
            ],
            [
                'recipe_id' => 3,
                'step_number' => 3,
                'content' => '米粉を加え、滑らかになるまで混ぜます。',
            ],
            [
                'recipe_id' => 3,
                'step_number' => 4,
                'content' => '卵白をハンドミキサーで泡立て、ある程度泡立ったら残りの砂糖を2回に分けて加え。ツノが立つまで泡立てメレンゲを作ります。',
            ],
            [
                'recipe_id' => 3,
                'step_number' => 5,
                'content' => 'メレンゲの1/3を卵黄生地に加え、泡だて器で全体を混ぜます。',
            ],
            [
                'recipe_id' => 3,
                'step_number' => 6,
                'content' => '残りのメレンゲを加え、今度は泡をつぶさないようにゴムベラで全体を混ぜます。',
            ],
            [
                'recipe_id' => 3,
                'step_number' => 7,
                'content' => '型を用意して、少し高いところから生地を一気に流し込む。',
            ],
            [
                'recipe_id' => 3,
                'step_number' => 8,
                'content' => '190℃のオーブンで25～30分焼きます。竹串を指して何もついてこなければ焼き上がり。冷まします。',
            ],
            [
                'recipe_id' => 3,
                'step_number' => 9,
                'content' => 'クリームを作ります。ボウルに豆乳クリームを入れてハンドミキサーで混ぜます。ある程度混ぜたら、砂糖とレモン汁も加えて混ぜクリーム状にします。',
            ],
            [
                'recipe_id' => 3,
                'step_number' =>10,
                'content' => '粗熱が取れたスポンジ生地をwカットし、お好みにクリームを塗りイチゴをトッピングしたら完成。',
            ],
            [
                'recipe_id' => 4,
                'step_number' => 1,
                'content' => 'タマネギを薄切りにし、鍋にすべての調味料と一緒に入れて煮込む。',
            ],
            [
                'recipe_id' => 4,
                'step_number' => 2,
                'content' => 'タマネギが半透明になってきたら牛肉を入れる。',
            ],
            [
                'recipe_id' => 4,
                'step_number' => 3,
                'content' => '灰汁をとりながら弱火で煮込んだら完成。',
            ],
            [
                'recipe_id' => 5,
                'step_number' => 1,
                'content' => 'キャベツとビーマンは食べやすい大きさにちぎり、長ネギは斜めに1cm幅に切っておく。豚肉はビニール袋に入れ、酒大さじ1と醤油1/2を入れ揉みこんで下味をつける。調味料を合わせておく。',
            ],
            [
                'recipe_id' => 5,
                'step_number' => 2,
                'content' => 'ビニール袋の豚肉に、片栗粉を入れて全体になじませる。',
            ],
            [
                'recipe_id' => 5,
                'step_number' => 3,
                'content' => 'サラダ油とごま油をフライパンに熱して、みじん切りの生姜とニンニクを炒める。香りが出たら、豚肉を入れて炒める。',
            ],
            [
                'recipe_id' => 5,
                'step_number' => 4,
                'content' => 'キャベツとピーマンを肉の上にのせ、少ししんなりするまで2分くらい蓋をして蒸し焼きにする。',
            ],
            [
                'recipe_id' => 5,
                'step_number' => 5,
                'content' => '合わせ調味料を回しかけ、大きく混ぜて味をなじませる。お好みで塩コショウで味を整えて完成。',
            ],
            [
                'recipe_id' => 6,
                'step_number' => 1,
                'content' => '食パンによく水を切ったレタスと、スライスしたトマトを挟んで、マヨネーズをかけ、ホットサンドメーカーで焼いたら敵上がり。',
            ],
            [
                'recipe_id' => 7,
                'step_number' => 1,
                'content' => 'じゃがいもはよく洗い、1つずつ濡れたキッチンペーパーでくるみ、さらにその上からラップでくるみ、レンジで500w5分加熱する。熱いうちにフォークなどで潰す。',
            ],
            [
                'recipe_id' => 7,
                'step_number' => 2,
                'content' => 'タマネギをみじん切りにする。',
            ],
            [
                'recipe_id' => 7,
                'step_number' => 3,
                'content' => 'ひき肉を炒め、火が通ってきたらタマネギも加えて炒める。砂糖、醤油を加えてさらに炒める。',
            ],
            [
                'recipe_id' => 7,
                'step_number' => 4,
                'content' => 'じゃがいもに炒めたひき肉を加えて塩コショウで味を整える。',
            ],
            [
                'recipe_id' => 7,
                'step_number' => 5,
                'content' => 'お好みの大きさに成型し、マヨネーズを全体に薄く塗りパン粉をまぶし、衣をつける。',
            ],
            [
                'recipe_id' => 7,
                'step_number' => 6,
                'content' => '170℃～180℃の油で2～3分、きつね色になるまで揚げる。',
            ],
            [
                'recipe_id' => 8,
                'step_number' => 1,
                'content' => '食材は食べやすい大きさに切る。',
            ],
            [
                'recipe_id' => 8,
                'step_number' => 2,
                'content' => '切った食材と調味料を鍋に入れ、落し蓋をして強火で煮立たせる。煮立ったら弱～中火でコトコト煮込む。',
            ],
            [
                'recipe_id' => 8,
                'step_number' => 3,
                'content' => '煮汁が半分～3分の1ほどになり、大根の色が変わったら完成。',
            ],
            [
                'recipe_id' => 9,
                'step_number' => 1,
                'content' => '鶏肉は食べやすい大きさに切り、にんじんは短冊切り、タマネギとシイタケは薄切りにする。',
            ],
            [
                'recipe_id' => 9,
                'step_number' => 2,
                'content' => '鍋に調味料とにんじんとタマネギを入れて強めの中火で2分煮る。',
            ],
            [
                'recipe_id' => 9,
                'step_number' => 3,
                'content' => '鶏肉とシイタケも入れてさらに5分ほどにて鶏肉に火を通す',
            ],
            [
                'recipe_id' => 9,
                'step_number' => 4,
                'content' => '溶き卵の2/3を加えて全体に混ぜ合わせ、蓋をして中火で30秒。',
            ],
            [
                'recipe_id' => 9,
                'step_number' => 5,
                'content' => '残りの溶き卵も加えて中火で半熟になるまで煮たて、器に盛ったら完成。',
            ],
            [
                'recipe_id' => 10,
                'step_number' => 1,
                'content' => 'かぼちゃは食べやすい大きさにカットし、耐熱容器にかぼちゃの皮を下にして敷き詰める',
            ],
            [
                'recipe_id' => 10,
                'step_number' => 2,
                'content' => '水、醤油、みりん、酒、砂糖を入れる',
            ],
            [
                'recipe_id' => 10,
                'step_number' => 3,
                'content' => 'ラップはかけずに500wで10分加熱する。粗熱が取れるまでレンジ庫内に置いておく。',
            ],
        ]);
    }
}

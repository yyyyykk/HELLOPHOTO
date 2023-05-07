<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '現役(2023~)',
                'sort_order' => 1,
            ],
            [
                'name' => 'OG(2022~2015)',
                'sort_order' => 2,
            ],
            [
                'name' => 'OG(2014~2009)',
                'sort_order' => 3,
            ],
            [
                'name' => 'OG(2008~2004)',
                'sort_order' => 4,
            ],
            [
                'name' => 'OG(2003~1998)',
                'sort_order' => 5,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '譜久村聖',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => '生田衣梨奈',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => '石田亜由美',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => '小田さくら',
                'sort_order' => 4,
                'primary_category_id' => 1
            ],
            [
                'name' => '野中美希',
                'sort_order' => 5,
                'primary_category_id' => 1
            ],
            [
                'name' => '牧野真莉愛',
                'sort_order' => 6,
                'primary_category_id' => 1
            ],
            [
                'name' => '羽賀朱音',
                'sort_order' => 7,
                'primary_category_id' => 1
            ],
            [
                'name' => '横山玲奈',
                'sort_order' => 8,
                'primary_category_id' => 1
            ],
            [
                'name' => '北川莉央',
                'sort_order' => 9,
                'primary_category_id' => 1
            ],
            [
                'name' => '岡村ほまれ',
                'sort_order' => 10,
                'primary_category_id' => 1
            ],
            [
                'name' => '山﨑愛生',
                'sort_order' => 11,
                'primary_category_id' => 1
            ],
            [
                'name' => '櫻井梨央',
                'sort_order' => 12,
                'primary_category_id' => 1
            ],


            [
                'name' => '加賀楓',
                'sort_order' => 13,
                'primary_category_id' => 2
            ],
            [
                'name' => '森戸知沙希',
                'sort_order' => 14,
                'primary_category_id' => 2
            ],
            [
                'name' => '佐藤優樹',
                'sort_order' => 15,
                'primary_category_id' => 2
            ],
            [
                'name' => '飯窪春菜',
                'sort_order' => 16,
                'primary_category_id' => 2
            ],
            [
                'name' => '尾形春水',
                'sort_order' => 17,
                'primary_category_id' => 2
            ],
            [
                'name' => '工藤遥',
                'sort_order' => 18,
                'primary_category_id' => 2
            ],
            [
                'name' => '鈴木香音',
                'sort_order' => 19,
                'primary_category_id' => 2
            ],
            [
                'name' => '鞘師里保',
                'sort_order' => 20,
                'primary_category_id' => 2
            ],


            [
                'name' => '道重さゆみ',
                'sort_order' => 21,
                'primary_category_id' => 3
            ],
            [
                'name' => '田中れいな',
                'sort_order' => 22,
                'primary_category_id' => 3
            ],
            [
                'name' => '光井愛佳',
                'sort_order' => 23,
                'primary_category_id' => 3
            ],
            [
                'name' => '新垣里沙',
                'sort_order' => 24,
                'primary_category_id' => 3
            ],
            [
                'name' => '高橋愛',
                'sort_order' => 25,
                'primary_category_id' => 3
            ],
            [
                'name' => '亀井絵里',
                'sort_order' => 26,
                'primary_category_id' => 3
            ],
            [
                'name' => 'ジュンジュン',
                'sort_order' => 27,
                'primary_category_id' => 3
            ],
            [
                'name' => 'リンリン',
                'sort_order' => 28,
                'primary_category_id' => 3
            ],
            [
                'name' => '久住小春',
                'sort_order' => 29,
                'primary_category_id' => 3
            ],


            [
                'name' => '藤本美貴',
                'sort_order' => 30,
                'primary_category_id' => 4
            ],
            

            [
                'name' => '後藤真希',
                'sort_order' => 31,
                'primary_category_id' => 5
            ],

            
        ]);
    }
}

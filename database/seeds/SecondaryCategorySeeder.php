<?php

use Illuminate\Database\Seeder;
use App\Models\SecondaryCategory;

class SecondaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SecondaryCategory::class)->create([
            'id'                  => 1,
            'name'                => '史跡めぐり',
            'sort_no'             => 1,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 2,
            'name'                => '神社・寺社めぐり',
            'sort_no'             => 2,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 3,
            'name'                => '酒造りめぐり',
            'sort_no'             => 3,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 4,
            'name'                => 'マリンスポーツ',
            'sort_no'             => 4,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 5,
            'name'                => '山登り・キャンプ',
            'sort_no'             => 5,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 6,
            'name'                => 'ケイビング・ジップライン',
            'sort_no'             => 6,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 7,
            'name'                => '動物園・水族館',
            'sort_no'             => 7,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 8,
            'name'                => '遊園地',
            'sort_no'             => 8,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 9,
            'name'                => '映画館・ゲームセンター',
            'sort_no'             => 9,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 10,
            'name'                => 'フルーツ狩り',
            'sort_no'             => 10,
            'primary_category_id' => 4,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 11,
            'name'                => '野菜狩り',
            'sort_no'             => 11,
            'primary_category_id' => 4,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 12,
            'name'                => '農業体験',
            'sort_no'             => 12,
            'primary_category_id' => 4,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 13,
            'name'                => '観光船・クルージング',
            'sort_no'             => 13,
            'primary_category_id' => 5,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 14,
            'name'                => 'お祭り・花火大会',
            'sort_no'             => 14,
            'primary_category_id' => 5,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 15,
            'name'                => '日帰り温泉・スパ',
            'sort_no'             => 15,
            'primary_category_id' => 5,
        ]);
    }
}

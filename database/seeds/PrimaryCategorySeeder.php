<?php

use Illuminate\Database\Seeder;
use App\Models\PrimaryCategory;

class PrimaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PrimaryCategory::class)->create([
            'id'      => 1,
            'name'    => '文化施設・名所巡り',
            'sort_no' => 1,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 2,
            'name'    => '自然・アウトドア',
            'sort_no' => 2,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 3,
            'name'    => '生きもの・エンタメ',
            'sort_no' => 3,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 4,
            'name'    => '果物・野菜狩り',
            'sort_no' => 4,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 5,
            'name'    => 'その他',
            'sort_no' => 5,
        ]);
    }
}

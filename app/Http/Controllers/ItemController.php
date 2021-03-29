<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // ダミーデータ
        $items = [
            (object)[
                'id' => 1,
                'title' => '観光素材1',
                'capacity' => 10,
                'description' => 'ナイスな観光地',
                'created_at' => now(),
                'user' => (object)[
                    'id' => 1,
                    'name' => '観光施設A',
                ],
                'secondary_categories' => (object)[
                    'id' => 1,
                    'name' => 'レジャー',
                ],
            ],
            (object)[
                'id' => 2,
                'title' => '観光素材2',
                'capacity' => 20,
                'description' => '素敵な観光地',
                'created_at' => now(),
                'user' => (object)[
                    'id' => 2,
                    'name' => '観光施設B',
                ],
                'secondary_categories' => (object)[
                    'id' => 2,
                    'name' => '自然',
                ],
            ],
            (object)[
                'id' => 3,
                'title' => '観光素材3',
                'capacity' => 30,
                'description' => 'イケてる観光地',
                'created_at' => now(),
                'user' => (object)[
                    'id' => 3,
                    'name' => '観光施設C',
                ],
                'secondary_categories' => (object)[
                    'id' => 3,
                    'name' => 'フルーツ狩り',
                ],
            ],
            (object)[
                'id' => 4,
                'title' => '観光素材4',
                'capacity' => 40,
                'description' => '古ぼけた観光地',
                'created_at' => now(),
                'user' => (object)[
                    'id' => 4,
                    'name' => '観光施設D',
                ],
                'secondary_categories' => (object)[
                    'id' => 4,
                    'name' => '文化施設',
                ],
            ],
        ];

        return view('items.index', ['items' => $items]);
    }
}

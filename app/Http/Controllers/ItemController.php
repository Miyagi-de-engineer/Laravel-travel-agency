<?php

namespace App\Http\Controllers;

use App\Item;
use App\Models\PrimaryCategory;
use App\Models\SecondaryCategory;

use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;

use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ItemController extends Controller
{
    public function index()
    {
        $categories = SecondaryCategory::orderBy('sort_no')->get();
        $items = Item::all()->sortByDesc('created_at');

        return view('items.index', [
            'categories' => $categories,
            'items'      => $items
        ]);
    }

    public function create()
    {
        $categories = PrimaryCategory::orderBy('sort_no')->get();

        return view('items.create')
            ->with('categories', $categories);
    }

    public function store(ItemRequest $request, Item $item)
    {

        // $imageName = $this->saveImage($request->file('item-image'));

        $item->title = $request->title;
        // $item->image_file_name = $imageName;
        $item->secondary_category_id = $request->input('category');
        $item->take_time = $request->take_time;
        $item->capacity = $request->capacity;
        $item->description = $request->description;
        $item->user_id = $request->user()->id;
        $item->save();
        return redirect()->route('items.index');
    }

    // /**
    //  * 商品画像をリサイズして保存します
    //  *
    //  * @param UploadedFile $file アップロードされた商品画像
    //  * @return string ファイル名
    //  */
    // private function saveImage(UploadedFile $file): string
    // {
    //     $tempPath = $this->makeTempPath();

    //     Image::make($file)->fit(300, 300)->save($tempPath);

    //     $filePath = Storage::disk('public')->putFile('item-images', new File($tempPath));

    //     return basename($filePath);
    // }

    // /**
    //  * 一時的なファイルを生成してパスを返します。
    //  *
    //  * @return string ファイルパス
    //  */
    // private function makeTempPath(): string
    // {
    //     $tmp_fp = tmpfile();
    //     $meta   = stream_get_meta_data($tmp_fp);
    //     return $meta["uri"];
    // }
}

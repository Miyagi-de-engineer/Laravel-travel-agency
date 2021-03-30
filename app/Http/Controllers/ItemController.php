<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all()->sortByDesc('created_at');

        return view('items.index', ['items' => $items]);
    }
}

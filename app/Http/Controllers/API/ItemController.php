<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the items.
     */
    public function index()
    {

        $items = Item::with([
            'enchantments',
            'hero',
            'merchants',
            'monsters',
            'tags',
            'minTier',
            'itemTiers.effects',
        ])->get();

        $data = [

            'result' => [
                'items' => $items,
            ],
            'success' => true
        ];

        return response()->json($data);
    }

    /**
     * Display the specified item by slug.
     */
    public function show($slug)
    {

        $item = Item::with([
            'enchantments',
            'hero',
            'merchants',
            'monsters',
            'tags',
            'minTier',
            'itemTiers.effects',
        ])->where('item_slug', $slug)->firstOrFail();

        $data = [

            'result' => $item,
            'success' => true
        ];

        return response()->json($data);
    }
}
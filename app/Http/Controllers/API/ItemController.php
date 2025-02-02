<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\ItemTier;
use Illuminate\Http\Request;

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
            'tiers.effects',
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
            'tiers.effects' => function ($query) {
                $query->withPivot('primary_value', 'secondary_value');
            },
        ])->where('item_slug', $slug)->firstOrFail();

        $data = [

            'result' => $item,
            'success' => true
        ];

        return response()->json($data);
    }
}
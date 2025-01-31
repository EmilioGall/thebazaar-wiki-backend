<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the items.
     */
    public function index()
    {
        // Ottieni tutti gli items senza eager loading
        $items = Item::all();

        return response()->json($items);
    }

    /**
     * Display the specified item by slug.
     */
    public function show($slug)
    {
        // Trova l'item tramite lo slug senza eager loading
        $item = Item::where('item_slug', $slug)->firstOrFail();

        return response()->json($item);
    }
}
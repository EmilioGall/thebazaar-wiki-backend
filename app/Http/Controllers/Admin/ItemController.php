<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $perPage = $request->per_page ? $request->per_page : 5;

        $curPage = $request->input('page', 1);

        $authUserId = Auth::id();

        $items = Item::with([
            'enchantments',
            'hero',
            'merchants',
            'monsters',
            'tags',
            'minTier',
            'itemTiers.effects',
        ])->paginate($perPage)->appends(['per_page' => $perPage]);

        // dd('items', $items);

        return view('admin.items.index', compact('items', 'curPage', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

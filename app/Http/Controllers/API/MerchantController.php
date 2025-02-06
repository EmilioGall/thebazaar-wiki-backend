<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    /**
     * Display a listing of the merchants.
     */
    public function index()
    {

        $merchants = Merchant::with([
            'heroes',
            'items',
            'skills',
            'tier',
        ])->get();

        $data = [

            'result' => [
                'merchants' => $merchants,
            ],
            'success' => true
        ];

        return response()->json($data);
    }

    /**
     * Display the specified merchant by slug.
     */
    public function show($slug)
    {

        $merchant = Merchant::with([
            'heroes',
            'items',
            'skills',
            'tier',
        ])->where('merchant_slug', $slug)->firstOrFail();

        $data = [

            'result' => $merchant,
            'success' => true
        ];

        return response()->json($data);
    }
}

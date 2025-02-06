<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tier;
use Illuminate\Http\Request;

class TierController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tiers = Tier::all();

        $data = [

            'result' => [
                'tiers' => $tiers,
            ],
            'success' => true
        ];

        return response()->json($data);
    }
}

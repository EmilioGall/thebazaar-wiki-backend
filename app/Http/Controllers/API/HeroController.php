<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $heroes = Hero::all();

        $data = [

            'result' => [
                'heroes' => $heroes,
            ],
            'success' => true
        ];

        return response()->json($data);
    }
}

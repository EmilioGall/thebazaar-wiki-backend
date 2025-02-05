<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the skills.
     */
    public function index()
    {

        $skills = Skill::with([
            'heroes',
            'merchants',
            'monsters',
            'tags',
            'minTier',
            'skillTiers.effects',
        ])->get();

        $data = [

            'result' => [
                'skills' => $skills,
            ],
            'success' => true
        ];

        return response()->json($data);
    }

    /**
     * Display the specified skill by slug.
     */
    public function show($slug)
    {

        $skill = Skill::with([
            'heroes',
            'merchants',
            'monsters',
            'tags',
            'minTier',
            'skillTiers.effects',
        ])->where('skill_slug', $slug)->firstOrFail();

        $data = [

            'result' => $skill,
            'success' => true
        ];

        return response()->json($data);
    }
}

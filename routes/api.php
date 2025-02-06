<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HeroController;
use App\Http\Controllers\API\ItemController;
use App\Http\Controllers\API\MerchantController;
use App\Http\Controllers\API\MonsterController;
use App\Http\Controllers\API\SkillController;
use App\Http\Controllers\API\TagController;
use App\Http\Controllers\API\TierController;
use App\Models\Tag;
use App\Models\Tier;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/heroes', [HeroController::class, 'index']);

Route::get('/tags', [TagController::class, 'index']);

Route::get('/tiers', [TierController::class, 'index']);

Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/{slug}', [ItemController::class, 'show']);

Route::get('/skills', [SkillController::class, 'index']);
Route::get('/skills/{slug}', [SkillController::class, 'show']);

Route::get('/merchants', [MerchantController::class, 'index']);
Route::get('/merchants/{slug}', [MerchantController::class, 'show']);

Route::get('/monsters', [MonsterController::class, 'index']);
Route::get('/monsters/{slug}', [MonsterController::class, 'show']);
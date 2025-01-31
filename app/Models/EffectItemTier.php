<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EffectItemTier extends Model
{
    use HasFactory;

    protected $table = 'effect_item_tier';

    protected $fillable = [
        'primary_value',
        'secondary_value',
        'effect_id',
        'item_tier_id',
    ];

    public $timestamps = true;

    ///// Relations /////

    public function effect()
    {
        return $this->belongsTo(Effect::class);
    }

    public function itemTier()
    {
        return $this->belongsTo(ItemTier::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EffectItem extends Model
{
    use HasFactory;

    protected $table = 'effect_item';

    protected $fillable = [
        'item_id',
        'effect_id',
        'tier_id',
        'value',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function effect()
    {
        return $this->belongsTo(Effect::class);
    }

    public function tier()
    {
        return $this->belongsTo(Tier::class);
    }
}

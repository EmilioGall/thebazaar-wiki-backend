<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemTier extends Model
{
    use HasFactory;

    protected $table = 'item_tier';

    protected $fillable = [

        'item_id',
        'tier_id'

    ];

    ///// Relations /////

    public function effects()
    {

        return $this->belongsToMany(Effect::class, 'effect_item_tier')->withPivot('primary_value', 'secondary_value');
    }

    public function item()
    {

        return $this->belongsTo(Item::class);
    }

    public function tier()
    {

        return $this->belongsTo(Tier::class);
    }
}

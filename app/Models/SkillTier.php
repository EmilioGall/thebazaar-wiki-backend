<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillTier extends Model
{
    use HasFactory;

    ///// Relations /////

    public function item()
    {

        return $this->belongsTo(Item::class);
    }

    public function tier()
    {

        return $this->belongsTo(Tier::class);
    }

    public function effect()
    {
        
        return $this->belongsTo(Effect::class);
    }
}

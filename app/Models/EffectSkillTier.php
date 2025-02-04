<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EffectSkillTier extends Model
{
    use HasFactory;

    protected $table = 'effect_skill_tier';

    protected $fillable = [
        'primary_value',
        'secondary_value',
        'effect_id',
        'skill_tier_id',
    ];

    public $timestamps = true;

    ///// Relations /////

    public function effect()
    {
        return $this->belongsTo(Effect::class);
    }

    public function skillTier()
    {
        return $this->belongsTo(SkillTier::class);
    }
}

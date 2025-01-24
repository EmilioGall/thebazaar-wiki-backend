<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EffectSkill extends Model
{
    use HasFactory;

    protected $table = 'effect_skill';

    protected $fillable = [
        'skill_id',
        'effect_id',
        'tier_id',
        'value',
    ];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
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

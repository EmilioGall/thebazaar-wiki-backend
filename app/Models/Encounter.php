<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Encounter extends Model
{
    use HasFactory;

    protected $fillable = [

        'encounter_name',
        'encounter_slug',
        'encounter_img',
        
    ];

    public function setEncounterNameAttribute($value)
    {

        $this->attributes['encounter_name'] = $value;

        $this->attributes['encounter_slug'] = Str::slug($value);
    }

    ///// Relations /////

    public function choices()
    {
        
        return $this->belongsToMany(Choice::class, 'choice_encounter')->withPivot('primary_value', 'secondary_value');
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class, 'encounter_tag');
    }
}

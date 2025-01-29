<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{
    use HasFactory;

    protected $fillable = [

        'encounter_name',
        'encounter_img'
        
    ];

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

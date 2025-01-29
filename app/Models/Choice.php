<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $fillable =[

        'choise_name',
        'choise_img',
        'choise_description'
        
    ];

    ///// Relations /////

    public function encounters()
    {

        return $this->belongsToMany(Encounter::class, 'choice_encounter')->withPivot('primary_value', 'secondary_value');
    }
}

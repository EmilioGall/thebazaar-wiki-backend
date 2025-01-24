<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{
    use HasFactory;

    ///// Relations /////

    public function choices()
    {
        return $this->belongsToMany(Choice::class, 'choice_encounter')
            ->withPivot('value');
    }

    public function media()
    {

        return $this->hasOne(Media::class);
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class);
    }
}

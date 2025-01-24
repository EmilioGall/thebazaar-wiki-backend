<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    ///// Relations /////

    public function encounters()
    {
        return $this->belongsToMany(Encounter::class, 'choice_encounter')
            ->withPivot('value');
    }

    public function media()
    {

        return $this->belongsToMany(Media::class);
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class);
    }
}

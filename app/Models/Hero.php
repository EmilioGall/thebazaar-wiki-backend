<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [

        'hero_name',
        'hero_img',
        'hero_description'
        
    ];

    ///// Relations /////

    public function items()
    {

        return $this->hasMany(Item::class);
    }

    public function merchants()
    {

        return $this->belongsToMany(Merchant::class, 'hero_merchant');
    }

    public function skills()
    {

        return $this->belongsToMany(Skill::class, 'hero_skill');
    }
}

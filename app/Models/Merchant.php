<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [

        'tier_id',
        'merchant_name',
        'merchant_img',
        'reroll_cost'

    ];

    ///// Relations /////

    public function items()
    {

        return $this->belongsToMany(Item::class, 'item_merchant');
    }

    public function skills()
    {

        return $this->belongsToMany(Skill::class, 'merchant_skill');
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class, 'merchant_tag');
    }

    public function tier()
    {

        return $this->belongsTo(Tier::class);
    }
}

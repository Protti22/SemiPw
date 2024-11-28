<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = [

        'name'
    ];

    public function pokemon()
    {
        return $this->hasMany(Pokemon::class);
    }
}

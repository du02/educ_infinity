<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'studant_id',
        'character_id',
        'power',
        'attack',
        'vitality',
        'critical',
        'luck',
        'armor'
    ];

    protected $table = 'characters';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

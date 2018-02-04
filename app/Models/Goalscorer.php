<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

class Goalscorer extends Model
{
    protected $fillable = [
        'match_id',
        'player_id',
        'minute'
    ];
}

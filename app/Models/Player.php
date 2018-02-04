<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'team_id',
        'goals'
    ];
}

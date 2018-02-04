<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'first_team_id',
        'second_team_id',
        'first_team_goals',
        'second_team_goals',
        'result',
        'start_time',
        'round',
        'stadium_id'
    ];
}

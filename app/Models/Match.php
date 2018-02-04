<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * WC2018\Models\Match
 *
 * @property int $id
 * @property int $first_team_id
 * @property int $second_team_id
 * @property int|null $first_team_goals
 * @property int|null $second_team_goals
 * @property string|null $result
 * @property string $start_time
 * @property string|null $round
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $stadium_id
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Match whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Match whereFirstTeamGoals($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Match whereFirstTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Match whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Match whereResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Match whereRound($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Match whereSecondTeamGoals($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Match whereSecondTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Match whereStadiumId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Match whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Match whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

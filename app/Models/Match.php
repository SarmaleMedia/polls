<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Builder;
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
 * @method static Builder|Match whereCreatedAt($value)
 * @method static Builder|Match whereFirstTeamGoals($value)
 * @method static Builder|Match whereFirstTeamId($value)
 * @method static Builder|Match whereId($value)
 * @method static Builder|Match whereResult($value)
 * @method static Builder|Match whereRound($value)
 * @method static Builder|Match whereSecondTeamGoals($value)
 * @method static Builder|Match whereSecondTeamId($value)
 * @method static Builder|Match whereStadiumId($value)
 * @method static Builder|Match whereStartTime($value)
 * @method static Builder|Match whereUpdatedAt($value)
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

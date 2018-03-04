<?php

namespace WC2018\Models;

use Carbon\Carbon;
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
class   Match extends Model
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

    public static function getMatchesForDisplay()
    {
        $matches = self::all()->toArray();
        $teams = Team::getTeamsForMatches();
        $parsedMatches = [];

        $index = [
            'Group A' => 0,
            'Group B' => 0,
            'Group C' => 0,
            'Group D' => 0,
            'Group E' => 0,
            'Group F' => 0,
            'Group G' => 0,
            'Group H' => 0,
        ];

        $groupRound = 1;

        foreach ($matches as $key => $match) {
            $groupName = $match['round'];
            $dateTime = new Carbon($match['start_time']);

            // Round calculations (Only for groups)
            if ($index[$groupName] % 2 == 0 && $index[$groupName] != 0) {
                $groupRound++;
                $index[$groupName] = 0;
            } elseif ($index[$groupName] == 0) {
                $groupRound = 1;
            }

            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]] = $match;
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]]['first_team'] = $teams[$match['first_team_id']]['name'];
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]]['first_team_flag'] = $teams[$match['first_team_id']]['flag'];
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]]['second_team'] = $teams[$match['second_team_id']]['name'];
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]]['second_team_flag'] = $teams[$match['second_team_id']]['flag'];
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]]['date'] = $dateTime->toDateString();
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]++]['hour'] = $dateTime->format('H:i');
        }

        return $parsedMatches;
    }
}

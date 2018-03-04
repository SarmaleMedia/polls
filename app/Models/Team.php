<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * WC2018\Models\Team
 *
 * @property int $id
 * @property string $name
 * @property int $goals_scored
 * @property int $goals_against
 * @property string|null $wc_group
 * @property int|null $wc_group_rank
 * @property int $wc_group_points
 * @property int $champion
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Team whereChampion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Team whereGoalsAgainst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Team whereGoalsScored($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Team whereWcGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Team whereWcGroupPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Team whereWcGroupRank($value)
 * @mixin \Eloquent
 */
class Team extends Model
{
    protected $fillable = [
        'goals_scored', 'goals_against', 'wc_group_rank', 'wc_group_points'
    ];

    public static function getGroupsWithRank(): array
    {
         $teams = self::orderBy('wc_group', 'asc')
             ->orderBy('wc_group_rank', 'asc')
             ->get()
             ->toArray();

        $groupRanking = [];
        foreach ($teams as $team) {
            $team['matches'] = Match::whereRaw(' (`matches`.first_team_id = ' . $team['id']
                . ' OR `matches`.second_team_id = ' . $team['id'] . ' ) AND `matches`.result IS NOT NULL' )
                ->count();
            $groupRanking[$team['wc_group']][] = $team;
        }

        return $groupRanking;
    }

    public static function getTeamsForMatches()
    {
        $teams = self::all();
        $parsedTeams = [];

        foreach ($teams as $team) {
            $parsedTeams[$team->id]['name'] = $team->name;
            $parsedTeams[$team->id]['flag'] = $team->flag_path;
        }

        return $parsedTeams;
    }
}

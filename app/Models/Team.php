<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'goals_scored', 'goals_against', 'wc_group_rank', 'wc_group_points'
    ];

    public static function getGroupsWithRank(): array
    {
         $teams = self::orderBy('wc_group', 'asc')->orderBy('wc_group_rank', 'asc')->get()->toArray();

        $groupRanking = [];
        foreach ($teams as $team) {
            $groupRanking[$team['wc_group']][] = $team;
        }

        return $groupRanking;
    }
}

<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/**
 * WC2018\Models\Bet
 *
 * @property int $id
 * @property int $user_id
 * @property int $match_id
 * @property int|null $first_team_goals
 * @property int|null $second_team_goals
 * @property string|null $result
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Bet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Bet whereFirstTeamGoals($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Bet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Bet whereMatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Bet whereResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Bet whereSecondTeamGoals($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Bet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Bet whereUserId($value)
 * @mixin \Eloquent
 */
class Bet extends Model
{
    protected $fillable = [
        'user_id',
        'match_id',
        'first_team_goals',
        'second_team_goals',
        'result'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToOne
     */
    public function user()
    {
        return $this->belongsToOne(User::class);
    }

    public static function getBetsByUser(int $userId)
    {
        return self::all()->whereUserId($userId);
    }

    public static function getBetsForDisplay($userId)
    {
        $matches = DB::select("SELECT 
                matches.*, 
                bets.first_team_goals as 'bet_first_team_goals',
                bets.second_team_goals as 'bet_second_team_goals',
                bets.result as 'bet_result'
                FROM `matches` 
                LEFT JOIN `bets` ON `bets`.match_id = `matches`.id AND `bets`.user_id = :user_id",
            ['user_id' => $userId]
        );

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
            $groupName = $match->round;
            $dateTime = new Carbon($match->start_time);

            // Round calculations (Only for groups)
            if ($index[$groupName] % 2 == 0 && $index[$groupName] != 0) {
                $groupRound++;
                $index[$groupName] = 0;
            } elseif ($index[$groupName] == 0) {
                $groupRound = 1;
            }

            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]] = (array) $match;
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]]['first_team'] = $teams[$match->first_team_id]['name'];
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]]['first_team_flag'] = $teams[$match->first_team_id]['flag'];
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]]['second_team'] = $teams[$match->second_team_id]['name'];
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]]['second_team_flag'] = $teams[$match->second_team_id]['flag'];
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]]['date'] = $dateTime->toDateString();
            $parsedMatches[$groupName]['Round ' . $groupRound][$index[$groupName]++]['hour'] = $dateTime->format('H:i');
        }

        return $parsedMatches;
    }
}

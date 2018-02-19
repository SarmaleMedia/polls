<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

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
}

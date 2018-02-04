<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * WC2018\Models\Goalscorer
 *
 * @property int $id
 * @property int $match_id
 * @property int $player_id
 * @property int|null $minute
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Goalscorer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Goalscorer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Goalscorer whereMatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Goalscorer whereMinute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Goalscorer wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Goalscorer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Goalscorer extends Model
{
    protected $fillable = [
        'match_id',
        'player_id',
        'minute'
    ];
}

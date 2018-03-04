<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * WC2018\Models\Player
 *
 * @property int $id
 * @property string $name
 * @property int $team_id
 * @property int $goals
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Player whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Player whereGoals($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Player whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Player whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Player whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Player whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Player extends Model
{
    protected $fillable = [
        'name',
        'team_id',
        'goals'
    ];
}

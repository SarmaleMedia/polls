<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * WC2018\Models\Group
 *
 * @property int $id
 * @property string $name
 * @property string|null $unique_code
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Group whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Group whereUniqueCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Group whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $complex
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Group whereComplex($value)
 */
class Group extends Model
{
    protected $fillable = [
        'name',
        'unique_code',
        'complex'
    ];
}

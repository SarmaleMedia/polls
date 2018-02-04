<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * WC2018\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\WC2018\Models\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\WC2018\Models\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

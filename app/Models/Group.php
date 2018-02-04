<?php

namespace WC2018\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name',
        'unique_code'
    ];
}

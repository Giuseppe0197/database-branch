<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'assumption',
        'wage',
        'name_team'
        ];
}

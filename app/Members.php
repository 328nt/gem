<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'sbd', 'day',
    ];
}

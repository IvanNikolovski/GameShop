<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_game extends Model
{
    protected $fillable = ['game_id', 'ranked', 'user_id'];
}

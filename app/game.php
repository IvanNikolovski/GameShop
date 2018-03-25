<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    protected $fillable = ['name', 'price', 'publisher', 'screenshot', 'description'];
}

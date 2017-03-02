<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    return $this->hasMany('App\Task');
}

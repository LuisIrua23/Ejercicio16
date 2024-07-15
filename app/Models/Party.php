<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;
    public function goal(){
        return $this->hasMany('App\Models\Goal');
    }

    public function team(){
        return $this->belongsToMany('App\Models\Team');
    }
}

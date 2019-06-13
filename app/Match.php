<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function home(){
        return $this->belongsTo(Team::class);
    }
    public function away(){
        return $this->belongsTo(Team::class);
    }
    public function goals(){
        return $this->hasMany(Goal::class);
    }
}

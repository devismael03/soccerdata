<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    public function match(){
        return $this->belongsTo(Match::class,'match_id');
    }
    public function scorer(){
        return $this->belongsTo(Player::class,'player_id');
    }
    public function team(){
        return $this->belongsTo(Team::class,'team_id');
    }
    public function against(){
        return $this->belongsTo(Team::class,'against_id');
    }
}

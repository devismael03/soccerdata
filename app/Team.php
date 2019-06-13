<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function scoredGoals(){
        return $this->hasMany(Goal::class,'team_id');
    }

    public function goalsAgainst(){
        return $this->hasMany(Goal::class,'against_id');
    }
    public function players(){
        return $this->hasMany(Player::class);
    }
    public function homeMatches(){
        return $this->hasMany(Match::class,'home_id');
    }
    public function awayMatches(){
        return $this->hasMany(Match::class,'away_id');
    }
}

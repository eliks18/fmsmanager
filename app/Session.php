<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function season() {
    	return $this->hasOne('App\Season', 'id', 'season_id');
    }
}

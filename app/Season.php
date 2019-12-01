<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function country() {
    	return $this->hasOne('App\Country', 'id', 'country_id');
    }
}

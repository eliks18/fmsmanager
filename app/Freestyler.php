<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freestyler extends Model
{
    public function country() {
    	return $this->hasOne('App\Country', 'id', 'country_id');
    }

    public function setAkaAttribute($value)
    {
    	$res = strtolower(utf8_decode($value));
    	$res = utf8_encode(ucfirst($res));
    	$this->attributes['aka'] = $res;
    }

}

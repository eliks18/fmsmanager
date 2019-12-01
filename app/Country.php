<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name_es', 'name_en','iso2', 'iso3'];

    public function seasons() {
    	return $this->hasMany('App\Season', 'country_id', 'id');
    } 
}

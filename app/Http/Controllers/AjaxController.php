<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Season;

class AjaxController extends Controller
{
	public function getNextSeason(Request $request)
	{
		$model = Country::findorfail($request->pais_id);
		return $model->seasons->count();
	}
	public function getAllSeasons()
	{
		$model = Season::orserBy('league_id')->with('league')->get();
	}
}

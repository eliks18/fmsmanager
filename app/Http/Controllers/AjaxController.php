<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class AjaxController extends Controller
{
	public function getNextSeason(Request $request)
	{
		$model = Country::findorfail($request->pais_id);
		return $model->seasons->count();
	}
}

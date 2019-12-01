<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CountriesImport;
use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
	public function import() 
	{
		Excel::import(new CountriesImport, 'paises.csv');

		return redirect('/')->with('success', 'All good!');
	}
}

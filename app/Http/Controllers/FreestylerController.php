<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Freestyler;
use App\Country;
use App\Season;

class FreestylerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freestylers = Freestyler::orderBy('country_id','ASC')->with('country')->get();

        return view('freestylers.index', ['freestylers' => $freestylers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $season_countries = Season::distinct('country_id')->pluck('country_id')->toArray();
        $countries = Country::whereIn('id', $season_countries)->get();
        return view('freestylers.create', ['paises' => $countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $freest = new Freestyler;
        $freest->country_id = $request->country_id;
        $freest->aka = $request->aka;
        $freest->status = $request->status;
        $freest->save();

        return redirect()->back()->with('message', 'Nuevo freestyler agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

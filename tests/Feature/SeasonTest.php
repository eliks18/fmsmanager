<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Country;
use App\Season;

class SeasonTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSeasonIndexIsWorkingWithNoSeasonsInDB()
    {
        $response = $this->get( route('season.index') );

        $response->assertStatus(200);
        $response->assertSeeText('Sin registros');
    }
    public function testSeasonIndexIsWorkingWithSeasonsInDB()
    {
        // ARRANGE
        $season = new Season;
        $season->country_id = '1';
        $season->season_no = '1';
        $season->year = '2017';
        $res = $season->save();
        // ACT
        $response = $this->get( route('session.index') );

        // ASSERT
        $response->assertStatus(200);
        $this->assertTrue($res);
    }
}
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Country;

class LeagueTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testLeagueIndexIsWorkingWithNoLeaguesInDB()
    {
        $response = $this->get( route('league.index') );

        $response->assertStatus(200);
        $response->assertSeeText('Aún no hay ninguna liga registrada!');
    }
    public function testLeagueIndexIsWorkingWithLeaguesInDB()
    {
        // ARRANGE
        $league = new Country;
        $league->name_es = 'prueba';
        $league->name_en = 'test';
        $league->iso2 = 'TS';
        $league->iso3 = 'TST';
        $res = $league->save();

        // ACT
        $response = $this->get( route('league.index') );

        // ASSERT
        $response->assertStatus(200);
        $this->assertTrue($res);
    }
}

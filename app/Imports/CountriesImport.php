<?php

namespace App\Imports;

use App\Country;
use Maatwebsite\Excel\Concerns\ToModel;

class CountriesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Country([
            'name_es'   => $row[0],
            'name_en'   => $row[1], 
            'iso2'      => $row[2],
            'iso3'      => $row[3],
        ]);
    }
}

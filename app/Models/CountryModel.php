<?php

namespace App\Models;

use CodeIgniter\Model;

class CountryModel extends Model
{
    protected $table = 'countries';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'alpha2Code',
        'alpha3Code',
        'callingCodes',
        'capital',
        'subregion',
        'region',
        'timezones',
        'flag',
    ];

    // get user data
    public function getAllCountries()
    {
        return $this->get()->getResultArray();
    }

}

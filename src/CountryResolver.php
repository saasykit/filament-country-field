<?php

namespace Parfaitementweb\FilamentCountryField;
use Parfaitementweb\FilamentCountryField\Traits\HasData;

class CountryResolver
{
    use HasData;

    public function resolveCountryFromCode($code): string
    {
        $countries = $this->getCountriesList();

        return $countries[$code] ?? $code;
    }
}

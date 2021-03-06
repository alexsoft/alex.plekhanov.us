<?php

namespace Alex\Repositories\Travel;

use Illuminate\Support\Collection;

interface ProvidesTrips
{
    public function getAllTrips(): Collection;

    public function getCountriesAndCitiesVisited(): Collection;
}

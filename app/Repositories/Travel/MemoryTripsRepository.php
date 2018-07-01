<?php

namespace Alex\Repositories\Travel;

use Alex\Entities\Trip;
use Alex\Entities\Country;
use Illuminate\Support\Collection;

class MemoryTripsRepository implements ProvidesTrips
{
    public function getAllTrips(): Collection
    {
        return collect(app('trips'))
            ->sortByDesc('order')
            ->map(function ($record) {
                return new Trip((array)$record);
            });
    }

    public function getCountriesAndCitiesVisited(): Collection
    {
        return collect(app('countriesAndCities'))
            ->sortBy('order')
            ->map(function ($item) {
                return new Country($item['name'], $item['code'], $item['cities']);
            });
    }
}

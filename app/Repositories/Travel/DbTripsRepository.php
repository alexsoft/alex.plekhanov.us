<?php

namespace Alex\Repositories\Travel;

use Alex\Entities\Trip;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class DbTripsRepository implements ProvidesTrips
{
    /**
     * @return Collection[Trip]
     */
    public function getAllTrips(): Collection
    {
        $records = DB::table('trips')
            ->select('id', 'title', 'subtitle', 'slug', 'text', 'date')
            ->orderBy('order', 'desc')
            ->get();

        return collect($records)->map(function ($record) {
            return new Trip((array) $record);
        });
    }

    public function getCountriesAndCitiesVisited(): Collection
    {
        return collect();
    }
}

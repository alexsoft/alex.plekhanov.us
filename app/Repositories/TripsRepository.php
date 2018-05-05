<?php

namespace Alex\Repositories;

use Alex\Entities\Trip;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class TripsRepository
{
    /**
     * @return Collection
     */
    public function getAllTrips()
    {
        $records = DB::table('trips')
            ->select('id', 'title', 'subtitle', 'slug', 'text', 'date')
            ->orderBy('order', 'desc')
            ->get();

        return collect($records)->map(function ($record) {
            return new Trip((array)$record);
        });
    }
}

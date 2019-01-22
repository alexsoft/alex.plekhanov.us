<?php

namespace Alex\Services;

use Alex\Entities\Trip;
use Alex\Repositories\Travel\ProvidesTrips;
use Illuminate\Support\Collection;

class TripsService
{
    /**
     * @var ProvidesTrips
     */
    protected $tripsRepository;

    /**
     * @param ProvidesTrips $tripsRepository
     */
    public function __construct(ProvidesTrips $tripsRepository)
    {
        $this->tripsRepository = $tripsRepository;
    }

    /**
     * @return Collection
     */
    public function getTripsGroupedByYear()
    {
        return $this->tripsRepository->getAllTrips()
            ->groupBy(function (Trip $trip) {
                return $trip->getDate()->year;
            });
    }

    /**
     * @return Collection
     */
    public function getCountriesAndCitiesVisited(): Collection
    {
        return $this->tripsRepository->getCountriesAndCitiesVisited();
    }
}

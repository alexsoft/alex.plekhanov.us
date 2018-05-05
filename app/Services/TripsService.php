<?php

namespace Alex\Services;

use Alex\Entities\Trip;
use Illuminate\Support\Collection;
use Alex\Repositories\TripsRepository;

class TripsService
{
    /**
     * @var TripsRepository
     */
    protected $tripsRepository;

    /**
     * @param TripsRepository $tripsRepository
     */
    public function __construct(TripsRepository $tripsRepository)
    {
        $this->tripsRepository = $tripsRepository;
    }

    /**
     * @return Collection
     */
    public function getAllTrips()
    {
        return $this->tripsRepository->getAllTrips()
            ->groupBy(function (Trip $trip) {
                return $trip->getDate()->year;
            });
    }
}

<?php

namespace Alex\Http\Controllers;

use Alex\Services\TripsService;

class TravelController extends Controller
{
    public function index(TripsService $tripsService)
    {
        $trips = $tripsService->getTripsGroupedByYear();

        return view('travel.index')->with(compact('trips'));
    }

    public function countries(TripsService $tripsService)
    {
        $countries = $tripsService->getCountriesAndCitiesVisited();

        return view('travel.countries')->with(compact('countries'));
    }
}

<?php

namespace Alex\Http\Controllers;

use Alex\Services\TripsService;

class TravelController extends Controller
{
    public function index(TripsService $tripsService)
    {
        $trips = $tripsService->getAllTrips();

        return view('travel.index')->with(compact('trips'));
    }
}

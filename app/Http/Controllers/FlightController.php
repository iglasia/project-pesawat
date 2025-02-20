<?php

namespace App\Http\Controllers;

use App\Interfaces\AirlaneRepositoryInterface;
use App\Interfaces\AirportRepositoryInterface;
use App\Interfaces\FlightRepositoryInterface;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    private AirportRepositoryInterface $airportRepository;
    private AirlaneRepositoryInterface $airlaneRepository;
    private FlightRepositoryInterface $flightRepository; 

    public function __construct(
        AirportRepositoryInterface $airportRepository,
        AirlaneRepositoryInterface $airlaneRepository, 
        FlightRepositoryInterface $flightRepository,) 
    {
        $this->airportRepository = $airportRepository;
        $this->airlaneRepository = $airlaneRepository;
        $this->flightRepository = $flightRepository;
    }

    public function index(Request $request)
    {
        $depature = $this->airportRepository->getAirportByIataCode($request->depature);
        $arrival = $this->airportRepository->getAirportByIataCode($request->arrrival);

        $flights = $this->flightRepository->getAllFlights([
            'depature' => $depature->id ?? null,
            'arrival' => $arrival->id ?? null,
            'date' => $request->date ?? null,
        ]);

        $airlanes = $this->airlaneRepository->getAllAirlanes();

        return view('pages.flight.index', compact('flights', 'airlanes'));
    }

    public function show($flightNumber)
    {
        $flight = $this->flightRepository->getFlightByFlightNumber($flightNumber);

        return view('pages.flight.show', compact('flight'));
    }
}

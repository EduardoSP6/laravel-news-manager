<?php

namespace App\Http\Controllers\api;

use App\GeoLocation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeoLocationController extends Controller
{
    /**
     * @var GeoLocation
     */
    private $geoLocation;

    public function __construct(GeoLocation $geoLocation)
    {
        $this->geoLocation = $geoLocation;
    }

    public function index()
    {
    }

    /**
     * Metodo responsavel por receber a GeoLocalizacao da API
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLocation(Request $request)
    {
        if($request) {
            $this->geoLocation->latitude  = $request->get('lat');
            $this->geoLocation->longitude = $request->get('long');
            return response()->json(['success' => 'OK'], 200);
        } else {
            return response()->json(['error' => 'Resource not found'], 501);
        }

    }
}

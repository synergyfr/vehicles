<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vehicle;

class VehicleController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

    public function index() {

    	$vehicles = Vehicle::all();

    	return view('vehicles.index', ['vehicles' => $vehicles]);
    }

    public function show($id) {
    	
    	$vehicle = Vehicle::find($id);
    	$owner   = $vehicle->owner;

    	return view('vehicles.show', ['vehicle' => $vehicle, 'owner' => $owner]);
    }

    public function create() {
    	return view('vehicles.create');
    }

    public function store() {
        
    }
}

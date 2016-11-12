<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vehicle;
use App\Owner;
use Validator;

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

    public function store(Request $request) {
         
        /* ----------------------------------------------
          VALIDATE THE VEHICLE ENTRY
        ---------------------------------------------- */

        $rules = array (
          'first_name'               => 'required',
          'last_name'                => 'required',
          'email'                    => 'required|email',
          'contact_number'           => 'required',

          'manufacturer'             => 'required',
          'type'                     => 'required',
          'year'                     => 'required|date_format:Y|max:10',
          'colour'                   => 'required',
          'mileage_units'            => 'required|max:2',
          'mileage'                  => 'required',
          'date_registered'          => 'required|date_format:d/m/Y'
        );

        $messages = [
            'product.required'      => 'Please select a product option',
            'vase.required'         => 'Please select a vase option',
            'frequency.required'    => 'Please select a frequency',
            'area.required'         => 'Please select an area'
        ];


        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('vehicles.create')->withErrors($validator)->withInput()->withError('Please make sure all the necessary details are filled in');
        }

        /* ----------------------------------------------
          CREATE OWNER RECORD
        ---------------------------------------------- */

        $owner = new Owner();
        $owner->first_name         = $request->input('first_name');
        $owner->last_name          = $request->input('last_name');
        $owner->email              = $request->input('email');
        $owner->contact_number     = $request->input('contact_number');
        $owner->save();

        /* ----------------------------------------------
          CREATE VEHICLE RECORD
        ---------------------------------------------- */

        $date_registered = \DateTime::createFromFormat('d/m/Y', $request->input('date_registered'))->format('Y-m-d');

        $vehicle = new Vehicle();
        $vehicle->owners_id         = $owner->id;
        $vehicle->manufacturer      = $request->input('manufacturer');
        $vehicle->type              = $request->input('type');
        $vehicle->year              = $request->input('year');
        $vehicle->colour            = $request->input('colour');
        $vehicle->mileage_units     = $request->input('mileage_units');
        $vehicle->mileage           = $request->input('mileage');
        $vehicle->date_registered   = $date_registered;
        $vehicle->save();



        return redirect()->route('vehicles.create')->withMessage('Record successfully created');
    }

    public function edit ($id) {
      $vehicle = Vehicle::findOrFail($id);
      $owner   = $vehicle->owner()->first();
      return view('vehicles.edit', ['vehicle' => $vehicle, 'owner' => $owner]);
    }

    public function update (Request $request, $id) {

        /* ----------------------------------------------
          VALIDATE THE VEHICLE ENTRY
        ---------------------------------------------- */

        $rules = array (
          'first_name'               => 'required',
          'last_name'                => 'required',
          'email'                    => 'required|email',
          'contact_number'           => 'required',

          'manufacturer'             => 'required',
          'type'                     => 'required',
          'year'                     => 'required|date_format:Y|max:10',
          'colour'                   => 'required',
          'mileage_units'            => 'required|max:2',
          'mileage'                  => 'required',
          'date_registered'          => 'required|date_format:d/m/Y'
        );

        $messages = [
            'product.required'      => 'Please select a product option',
            'vase.required'         => 'Please select a vase option',
            'frequency.required'    => 'Please select a frequency',
            'area.required'         => 'Please select an area'
        ];


        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('vehicles.edit', $id)->withErrors($validator)->withInput()->withError('Please make sure all the necessary details are filled in');
        }


        $vehicle = Vehicle::findOrFail($id);
        $owner   = Owner::find($vehicle->owners_id);

        /* ----------------------------------------------
          UPDATE OWNER RECORD
        ---------------------------------------------- */

        $owner->first_name         = $request->input('first_name');
        $owner->last_name          = $request->input('last_name');
        $owner->email              = $request->input('email');
        $owner->contact_number     = $request->input('contact_number');
        $owner->save();

        /* ----------------------------------------------
          UPDATE THE VEHICLE RECORD
        ---------------------------------------------- */

        $date_registered = \DateTime::createFromFormat('d/m/Y', $request->input('date_registered'))->format('Y-m-d');

        $vehicle->owners_id         = $owner->id;
        $vehicle->manufacturer      = $request->input('manufacturer');
        $vehicle->type              = $request->input('type');
        $vehicle->year              = $request->input('year');
        $vehicle->colour            = $request->input('colour');
        $vehicle->mileage_units     = $request->input('mileage_units');
        $vehicle->mileage           = $request->input('mileage');
        $vehicle->date_registered   = $date_registered;
        $vehicle->save();



        return redirect()->route('vehicles.edit', $id)->withMessage('Record successfully changed');

    }

    public function delete ($id) {

    }
}

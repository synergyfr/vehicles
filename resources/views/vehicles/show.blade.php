@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Vehicle View</div>

                <div class="panel-body">
                    
                    <h4>Owner Information</h4>

                	<div class="owner-info">
                		<p>
                			<strong>First & Last Name</strong> : {{ $owner->first_name }} {{ $owner->last_name }}<br />
                			<strong>Email Address</strong> : {{ $owner->email }}<br />
                			<strong>Contact Number</strong> : {{ $owner->contact_number }}
                		</p>
                	</div>

                    <h4 class="p-t-10">Vehicle Information</h4>

                	<div class="vehicle-info">
                		<p>
                			<strong>Manufacturer</strong> : {{ $vehicle->manufacturer }}<br />
                			<strong>Type</strong> : {{ $vehicle->type }}<br />
                			<strong>Year</strong> : {{ $vehicle->year }}<br />
                			<strong>Colour</strong> : {{ $vehicle->colour }}<br />
                			<strong>Mileage</strong> : {{ $vehicle->mileage }} {{ $vehicle->mileage_units }}<br />

                            <?php $date_registered = date('d/m/Y', strtotime($vehicle->date_registered)); ?>
                			<strong>Date Registered</strong> : {{ $date_registered }}
                		</p>
                	</div>

                </div>
                <div class="panel-footer">
                    <a href="{{ route('vehicles.index') }}" class="btn">Back to Vehicles</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
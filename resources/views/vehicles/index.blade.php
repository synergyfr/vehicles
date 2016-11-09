@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p>Welcome {{ Auth::user()->name }}</p>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Previously Registered Vehicles <a class="pull-right" href="{{ route('vehicles.create') }}">New</a>
                </div>

                <div class="panel-body">
                    
                <table class="table table-striped">
                	<thead>
                		<th>Owner Name</th>
                		<th>Vehicle Manufacturer &amp; Type</th>
                		<th>Date Registered</th>
                        <th>&nbsp;</th>
                	</thead>
                	<tbody>
                		@foreach ($vehicles as $vehicle)

                    		<tr>
                    			<td>{{ $vehicle->owner->first_name . ' ' . $vehicle->owner->last_name }}</td>
                    			<td>{{ $vehicle->manufacturer . ' ' . $vehicle->type }}</td>
                    			<td>{{ $vehicle->date_registered }}</td>
                                <td><a href="{{ route('vehicles.show', ['id' => $vehicle->id]) }}">View</a></td>
                    		</tr>

                		@endforeach
                	</tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
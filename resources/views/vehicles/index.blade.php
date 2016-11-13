@extends('layouts.app')

@section('content')

<div class="message-container container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{{ Session::get('message') }}}
               </div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-danger">
                   {{{ Session::get('error') }}}
               </div>
            @endif
        </div>  
    </div>

</div>

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

                            <?php $date_registered = date('d/m/Y', strtotime($vehicle->date_registered)); ?>

                    		<tr>
                    			<td>{{ $vehicle->owner->first_name . ' ' . $vehicle->owner->last_name }}</td>
                    			<td>{{ $vehicle->manufacturer . ' ' . $vehicle->type }}</td>
                    			<td>{{ $date_registered }}</td>

                                <td><a href="{{ route('vehicles.show', ['id' => $vehicle->id]) }}">View</a></td>
                                <td><a href="{{ route('vehicles.edit', ['id' => $vehicle->id]) }}">Edit</a></td>
                                <td>
                                    <button class="btn btn-success confirm-delete" data-toggle="modal" data-target="#modal-delete" data-id="{{ $vehicle->id }}">Delete</button> 
                                </td>
                    		</tr>

                		@endforeach
                	</tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>

@include ('modals._delete')

@endsection
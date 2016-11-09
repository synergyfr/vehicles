@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Vehicle</div>

                <div class="panel-body">
                    
                	{!! Form::open( array( 'route' => 'vehicles.store', 'id' => 'create-vehicle' ) ) !!}

                		@include('vehicles._partials._create_form')

                	{!! Form::submit('Create Vehicle', ['class' => 'btn btn-success']) !!}

                	{!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
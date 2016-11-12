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
                <div class="panel panel-default">
                    <div class="panel-heading">Update Vehicle</div>

                    <div class="panel-body">
                        
                    	{!! Form::model($vehicle, array( 'route' => array('vehicles.update', $vehicle->id), 'method' => 'PUT', 'id' => 'edit-vehicle' ) ) !!}

                    		@include('vehicles._partials._create_form')

                    	{!! Form::submit('Update Vehicle', ['class' => 'btn btn-success']) !!}

                    	{!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
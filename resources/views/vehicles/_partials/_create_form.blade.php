 
<div class="form-group <?php if($errors->has('first_name')) echo 'has-error'; ?>">
	{{ Form::label('first_name', 'First Name') }}<span class="text-danger required">*</span> 
	{{ Form::text('first_name', (isset($owner)) ? $owner->first_name : null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('first_name', '<small class="text-danger">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('last_name')) echo 'has-error'; ?>">
	{{ Form::label('last_name', 'Last Name') }}<span class="text-danger required">*</span>
	{{ Form::text('last_name', (isset($owner)) ? $owner->last_name : null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('last_name', '<small class="text-danger">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('email')) echo 'has-error'; ?>">
	{{ Form::label('email', 'Email Address') }}<span class="text-danger required">*</span>
	{{ Form::text('email', (isset($owner)) ? $owner->email : null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('contact_number')) echo 'has-error'; ?>">
	{{ Form::label('contact_number', 'Contact Number') }}<span class="text-danger required">*</span>
	{{ Form::text('contact_number', (isset($owner)) ? $owner->contact_number : null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('contact_number', '<small class="text-danger">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('manufacturer')) echo 'has-error'; ?>">
	{{ Form::label('manufacturer', 'Manufacturer') }}<span class="text-danger required">*</span>
	<span class="help">e.g. Volkswagen</span> 
	{{ Form::text('manufacturer', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('manufacturer', '<small class="text-danger">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('type')) echo 'has-error'; ?>">
	{{ Form::label('type', 'Type') }}<span class="text-danger required">*</span>
	<span class="help">e.g. Polo</span> 
	{{ Form::text('type', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('type', '<small class="text-danger">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('year')) echo 'has-error'; ?>">
	{{ Form::label('year', 'Year') }}<span class="text-danger required">*</span>
	{{ Form::text('year', null, [ 'class' => 'form-control', 'placeholder' => 'YYYY'] ) }}
	{!! $errors->first('year', '<small class="text-danger">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('colour')) echo 'has-error'; ?>">
	{{ Form::label('colour', 'Colour') }}<span class="text-danger required">*</span>
	{{ Form::text('colour', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('colour', '<small class="text-danger">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('mileage_units')) echo 'has-error'; ?>">
	{{ Form::label('mileage_units', 'Mileage Units') }}<span class="text-danger required">*</span>
	{{ Form::select('mileage_units', ['km' => 'km', 'm' => 'm'], null, ['style' => 'display: block; margin-bottom: 15px;']) }}
	{!! $errors->first('mileage_units', '<small class="text-danger">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('mileage')) echo 'has-error'; ?>">
	{{ Form::label('mileage', 'Mileage') }}<span class="text-danger required">*</span>
	{{-- {{ Form::select()}} --}}
	{{ Form::text('mileage', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('mileage', '<small class="text-danger">:message</small>') !!}
</div>

<?php
	$date_registered = (isset($vehicle)) ? date('d/m/Y', strtotime($vehicle->date_registered)) : null;
?>

<div class="form-group <?php if($errors->has('date_registered')) echo 'has-error'; ?>">
	{{ Form::label('date_registered', 'Date Registered') }}<span class="text-danger required">*</span>
	<span class="help">e.g. 22/10/2004</span>
	{{ Form::text('date_registered', $date_registered, [ 'class' => 'form-control', 'placeholder' => 'DD/MM/YYYY'] ) }}
	{!! $errors->first('date_registered', '<small class="text-danger">:message</small>') !!}
</div>

<span class="text-danger required-text">* fields are required</span>
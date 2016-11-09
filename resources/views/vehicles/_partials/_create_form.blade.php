 
<div class="form-group <?php if($errors->has('first_name')) echo 'has-error'; ?>">
	{{ Form::label('first_name', 'First Name') }}
	{{ Form::text('first_name', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('first_name', '<small class="error">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('last_name')) echo 'has-error'; ?>">
	{{ Form::label('last_name', 'Last Name') }}
	{{ Form::text('last_name', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('last_name', '<small class="error">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('email')) echo 'has-error'; ?>">
	{{ Form::label('email', 'Email Address') }}
	{{ Form::text('email', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('email', '<small class="error">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('contact_number')) echo 'has-error'; ?>">
	{{ Form::label('contact_number', 'Contact Number') }}
	{{ Form::text('contact_number', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('contact_number', '<small class="error">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('manufacturer')) echo 'has-error'; ?>">
	{{ Form::label('manufacturer', 'Manufacturer') }}
	<span class="help">e.g. Volkswagen</span> 
	{{ Form::text('manufacturer', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('manufacturer', '<small class="error">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('type')) echo 'has-error'; ?>">
	{{ Form::label('type', 'Type') }}
	<span class="help">e.g. Polo</span> 
	{{ Form::text('type', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('type', '<small class="error">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('year')) echo 'has-error'; ?>">
	{{ Form::label('year', 'Year') }}
	<span class="help">e.g. Polo</span> 
	{{ Form::text('year', null, [ 'class' => 'form-control', 'placeholder' => 'YYYY'] ) }}
	{!! $errors->first('year', '<small class="error">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('colour')) echo 'has-error'; ?>">
	{{ Form::label('colour', 'Colour') }}
	{{ Form::text('colour', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('colour', '<small class="error">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('mileage')) echo 'has-error'; ?>">
	{{ Form::label('mileage', 'Mileage') }}
	{{-- {{ Form::select()}} --}}
	{{ Form::text('mileage', null, [ 'class' => 'form-control'] ) }}
	{!! $errors->first('mileage', '<small class="error">:message</small>') !!}
</div>

<div class="form-group <?php if($errors->has('date_registered')) echo 'has-error'; ?>">
	{{ Form::label('date_registered', 'Date Registered') }}
	{{ Form::text('date_registered', null, [ 'class' => 'form-control', 'placeholder' => 'YYYY-MM-DD'] ) }}
	{!! $errors->first('date_registered', '<small class="error">:message</small>') !!}
</div>
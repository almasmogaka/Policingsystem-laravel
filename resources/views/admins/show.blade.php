@extends('admins.admin')

@section('content')
<hr>
<div class="row">
	<div class="col-md-4">
		<h4>Type of Crime:</h4>		
	</div>
	<div class="col-md-8">
		<h4>{{ $crime->crimetype->type }}</h4>
	</div>
	
</div><hr>
<div class="row">
	<div class="col-md-4">
		<h4>The Crime was Reported By:</h4>		
	</div>
	<div class="col-md-8">
		<h5>{{ $crime->name }}</h5>
	</div>
	
</div><hr>
<div class="row">
	<div class="col-md-4">
		<h4>Phone Number:</h4>		
	</div>
	<div class="col-md-8">
		<h5>{{ $crime->phone_no }}</h5>
	</div>
	
</div><hr>
<div class="row">
	<div class="col-md-4">
		<h4>Recorded by:</h4>		
	</div>
	<div class="col-md-8">
		<h5>{{ $crime->recordedby }}</h5>
	</div>
	
</div><hr>
<div class="row">
	<div class="col-md-4">
		<h4>Crime Details:</h4>		
	</div>
	<div class="col-md-8">
		<he>{{ $crime->description }}</he>
	</div>
	
</div><hr>
<div class="row">
	<div class="col-md-4">
		<h4>place the incidence happpened:</h4>		
	</div>
	<div class="col-md-8">
		<h5>{{ $crime->l_occurred }}</h5>
	</div>
	
</div><hr>
<div class="row">
	<div class="col-md-4">
		<h4>Date the incidence happened:</h4>		
	</div>
	<div class="col-md-8">
		<h5>{{ $crime->date }}</h5>
	</div>
	
</div><hr>
<div class="row">
	<div class="col-md-4">
		<h4>Time it happened:</h4>		
	</div>
	<div class="col-md-8">
		<h5>{{ $crime->time }}</h5>
	</div>
	
</div><hr>
<div class="row">
	<div class="col-md-4">
		<h4>status of the crime:</h4>		
	</div>
	<div class="col-md-8">
		<h4>{{ $crime->state->name }}</h4>
	</div>
	
</div><hr>
@endsection
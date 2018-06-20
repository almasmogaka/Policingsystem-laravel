@extends('welcome2');

@section('content')
	<div class="col-md-10">
		<h4>Contact Information</h4><hr>
		<h4>Address:</h4>
		<p>Vigilance House Harambee Street</p>
		<p>Nairorbi</p>	
		<p> Kenya</p> 
		<p>Email: info@policeinformation.go.ke</p>    	

		<div class="well"><hr>
			<p>Fill this form with the Correct information</p>
			<p text-color="red">* Indicates required field</p>
			<form method="POST" action="/contact">
				{{ csrf_field() }}

			  <div class="form-group row">
			    <label for="name" class="col-sm-2 col-form-label">Name:*</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control " id="name" placeholder="Name">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="email" class="col-sm-2 col-form-label">Email:*</label>
			    <div class="col-sm-6">
			      <input type="email" class="form-control" id="email" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="subject" class="col-sm-2 col-form-label">Subject:*</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control form-control-lg" id="subject" placeholder="Subject">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="message" class="col-sm-2 col-form-label col-form-label-lg">Message:*</label>
			    <div class="col-sm-10">
			      <textarea type="textarea" class="form-control form-control-lg" id="message" placeholder="Type Your Message Here"></textarea>
			    </div>
			  </div>
			  <div class="col-lg-2 offset-md-7">
			      <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Send Message</button>
			    </div>
			  			  
			</form>

		</div>
	</div>
	
@stop
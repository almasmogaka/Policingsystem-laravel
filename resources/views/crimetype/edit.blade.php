@extends('admins.admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		 	{!! Form::model($crimetype, ['route' =>['crimetypes.update', $crimetype->id], 'method' =>'PUT']) !!}

            {{ Form::label('type','Crime Type:') }}
            {{ Form::text('type',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
            {{ Form::label('description',"Crime Description:") }} 
            {{ Form::text('description',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}           

            {{ Form::submit('Save Changes', array('class' => 'btn btn-success btn-sm btn-block', 'style'=> 'margin-top: 20px')) }}                   
		
	</div>
	
</div>

@endsection
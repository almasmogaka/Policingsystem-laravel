@extends('admins.admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		 		{!! Form::open(array('route' => 'crimetypes.store')) !!}

                    {{ Form::label('type','Crime Type:') }}
                    {{ Form::text('type',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    {{ Form::label('description',"Crime Description:") }} 
                    {{ Form::text('description',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}           

                    {{ Form::submit('Add', array('class' => 'btn btn-success btn-md btn-block', 'style'=> 'margin-top: 20px')) }}
                    {!! Form::close() !!}
		
	</div>
	
</div>


@endsection
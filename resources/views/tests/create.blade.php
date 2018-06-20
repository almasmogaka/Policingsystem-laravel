@extends('layouts.police')

@section('content')
<div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Testing Report form') }}</div><hr>

                <div class="card-body">

                    {!! Form::open(array('route' => 'tests.store')) !!}

                    {{ Form::label('fname','First Name:') }}
                    {{ Form::text('fname',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    {{ Form::label('lname',"Last Name:") }} 
                    {{ Form::text('lname',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    {{ Form::label('address','Address:') }}
                    {{ Form::text('address',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    {{ Form::label('p_residence',"Place Of Residence:") }} 
                    {{ Form::text('p_residence',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    {{ Form::label('phone_no','Phone No.:') }}
                    {{ Form::text('phone_no',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    {{ Form::label('l_occurred',"Areaa/Village/City:") }} 
                    {{ Form::text('l_occurred',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    {{ Form::label('l_address','Address:') }}
                    {{ Form::text('l_address',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    {{ Form::label('op','Observations:') }}
                    {{ Form::text('op',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    {{ Form::label('suspect',"Information About The Suspect:") }} 
                    {{ Form::textarea('suspect', null, array('class' => 'form-control')) }}
                                        

                    {{ Form::submit('Register Crime', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top: 20px')) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
            
        
@endsection
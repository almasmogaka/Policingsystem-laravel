@extends('layouts.police')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Victim Report form') }}</div>

                <div class="card-body">

                    {!! Form::open(array('route' => 'crimes.store', 'files'=>'true')) !!}
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::label('crimetype_id','Crime Type:') }}
                        <select class="form-control" name="crimetype_id"> 
                            @foreach($crimetypes as $crimetype)
                            <option value="{{ $crimetype->id }}">{{ $crimetype->type }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <div class="col-md-4" >
                        {{ Form::label('name','Name:') }}                 
                        {{ Form::text('name',null, array( 'class' => 'form-control','required'=>'','maxlength'=>'255')) }}
                    </div>
                
                    <div class="col-md-4" >
                        {{ Form::label('phone_no','Phone No.:') }}
                        {{ Form::tel('phone_no',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    </div>
                </div><hr>
                <div class="row" >
                    <div class="col-md-12">
                    {{ Form::label('description',"Crime Description:") }} 
                    {{ Form::textarea('description', null, array('class' => 'form-control', 'rows'=>"6")) }}
                    </div>
                </div><hr>
                <div class="row" >         
                    <div class="col-md-3">
                        {{ Form::label('l_occurred',"Areaa/Village/City:") }} 
                        {{ Form::text('l_occurred',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    </div>                
                    <div class="col-md-2" >
                        {{ Form::label('l_address','Address:') }}
                        {{ Form::text('l_address',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    </div>
                    <div class="col-md-4" >
                        {{ Form::label('evidence','Available Evidence:') }}
                        {{ Form::file('evidence') }}
                    </div>
                    <div class="col-md-3" >
                        {{ Form::label('date',"Date it Occurred:") }} 
                        {{ Form::date('date',\Carbon\Carbon::now(), null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                    </div>
                </div><hr>
                <div class="row" >
                    <div class="col-md-12">
                        {{ Form::label('m_taken',"What steps taken on the spot:") }} 
                        {{ Form::textarea('m_taken', null, array('class' => 'form-control','rows'=>'2')) }}
                    </div>
                </div><hr>
                <div class="row" >
                    <div class="col-md-12">
                        {{ Form::label('state_id',"status:" ) }}                     
                        <select class="form-control" name="state_id" > 
                        @foreach($states as $state)                       
                            <option value='{{ $state->id }}'>{{ $state->status }}</option>                       
                        @endforeach 
                        </select>
                    </div>
                </div><hr>

                    {{ Form::submit('Register Crime', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-bottom: 20px;')) }}
                    {!! Form::close() !!}                       
                </div>
            </div>
        </div>
    </div>
</div>
            
        
@endsection
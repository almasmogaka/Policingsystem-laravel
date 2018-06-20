@extends('layouts.police')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Update of information') }}</div>

                <div class="card-body">

                    {!! Form::model($crime, ['route' =>['crimes.update', $crime->id], 'method' => 'PUT' ]) !!}                    
                    <div class="row">
                        <div class="col-md-5">
                        {{ Form::label('name','Name:') }}                 
                        {{ Form::text('name',null, array( 'class' => 'form-control','required'=>'','maxlength'=>'255')) }}
                        </div>
                        <div class="col-md-5">
                        {{ Form::label('phone_no','Phone No.:') }}
                        {{ Form::text('phone_no',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-md-12">

                        {{ Form::label('description',"Crime Description:") }} 
                        {{ Form::textarea('description', null, array('class' => 'form-control', 'rows'=>"5")) }}
                        </div>
                    </div><hr>

                    <div class="row">
                        <div class="col-md-3">
                        {{ Form::label('l_occurred',"Areaa/Village/City:") }} 
                        {{ Form::text('l_occurred',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}</div>

                        <div class="col-md-3">
                        {{ Form::label('l_address','Address:') }}
                        {{ Form::text('l_address',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}</div>
                        <div class="col-md-3">
                        {{ Form::label('date',"Date it Occurred:") }} 
                        {{ Form::text('date',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}</div>
                        <div class="col-md-3">
                        {{ Form::label('time','Time it Occurred:') }}
                        {{ Form::text('time',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}</div>
                    </div><hr>
                    <div class="row">
                        <div class="col-md-12">
                        {{ Form::label('m_taken',"What steps taken on the spot:") }} 
                        {{ Form::textarea('m_taken', null, array('class' => 'form-control', 'rows'=>"3")) }}</div>
                    </div><hr>
                    <div class="row">
                        <div class="col-md-12">
                        {{ Form::label('state_id',"status:") }}
                        {{ Form::select('state_id', $states, null, array('class' => 'form-control')) }} </div>
                     
                    {{ Form::submit('Save Changes', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top: 20px')) }}
                    
                    </div>

                        
                </div>
            </div>
        </div>
    </div>
</div>
            
        
@endsection
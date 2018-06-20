@extends('admins.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Police Officer information') }}</div><hr>

                <div class="card-body">
                    
                        {!! Form::model($user, ['route'=>['admin.update', $user->id], 'method'=>'PUT']) !!}

                            {{ Form::label('id_no','Police ID. Number:') }}
                            {{ Form::text('id_no',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                            {{ Form::label('name',"Name:") }} 
                            {{ Form::text('name',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                            {{ Form::label('email','Email:') }}
                            {{ Form::text('email',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
                            {{ Form::label('job_title',"Job Title:") }}
                            {{ Form::text('job_title',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }} 

                            <div class="row">                                
                                <div class="col-md-6">
                                    {{ Form::Submit('Save changes',['class' =>'btn btn-success btn-block']) }}
                                </div>
                            </div>  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.police')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                
                <div class="card-header">
                    {!! Form::open(array('route' => 'crime.postsearch', 'class' => 'form-inline')) !!}

                    {{ Form::label('search','Crime Search :') }}
                    {{ Form::text('search',null, array('class' => 'form-control', 'placeholder'=>'Search', 'required'=>'','maxlength'=>'255')) }}
                    
                    {{ Form::submit('Search', array('class' => 'btn btn-default')) }}
                    {!! Form::close() !!}
                    
                </div>
                  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                    @if (count($crimes) > 0)

                    <table class="table">
                        <thead>
                            <th></th>
                            <th>Reported By</th>
                            <th>Recorded By</th>
                            <th>Happened On</th>
                            <th>Reported On</th>
                            <th>Status</th>
                            <td></td>
                            <td></td>
                        </thead>
                        <tbody>
                            
                            @foreach ($crimes as $crime)
                            <tr>
                                <th></th>
                                <td>{{ $crime->name }}</td>
                                <td>{{ $crime->recordedby }}</td>
                                <td>{{ $crime->date }}</td>
                                <td>{{ date('M j,y h:ia', strtotime($crime->created_at)) }}</td>
                                <td>{{ $crime->state->name }}</td>
                                <td><a href="{{ route('crimes.show', $crime->id) }}" class="btn btn-default btn-sm">View</a></td>
                                <td><a href="{{ route('crimes.edit', $crime->id) }}" class="btn btn-default btn-sm">Edit</a></td>
                            </tr>
                        
                            @endforeach

                        </tbody>
                        
                    </table>
                    @endif
                    <div class="text-center">
                        {!! $crimes->links(); !!}
                        
                    </div>                                                
                </div>                     
            </div>
        </div>
    </div>
</div>
@endsection

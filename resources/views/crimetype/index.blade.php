@extends('admins.admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Crime Type</th>
					<th>Crime Description</th>
					<th>Action</th>
					<th>Action</th>
				</tr>
			</thead>			
			<tbody>
				@foreach($crimetypes as $crimetype)
				<tr>
					<td>{{ $crimetype->id }}</td>
					<td>{{ $crimetype->type }}</td>
					<td>{{ $crimetype->description }}</td>
					<td><a href="{{ route('crimetypes.edit', $crimetype->id) }}" class="btn btn-primary">edit</a></td>
					<td>
						{!! Form::open(['route' => ['crimetypes.destroy',$crimetype->id], 'method' => 'DELETE']) !!}
						{{ Form::submit('Delete') }}
						{{ form::close() }}
						
						</td>
						
				</tr>
				@endforeach
			</tbody>
					
		</table>
		
	</div>
	
</div>

@endsection
@extends('admins.admin')

@section('content')

<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>ID. NO.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Job Title</th>
					<th> </th>
					<th> </th>
				</thead>

				<tbody>					
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->id_no }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->job_title }}</td>
						<td><a href="{{ route('admin.edit', $user->id) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit">edit</span></a> </td>
						<td>
							{!! Form::open(['route'=>['admin.destroy', $user->id], 'method'=>'DELETE']) !!}
							{!! Form::submit('Delete') !!}
					
							{!! Form::close() !!}
					    </td>
					</tr>					
					
				</tbody>
				
			</table>			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>Name</th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					<tr>
						<td></td>
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>
@endsection
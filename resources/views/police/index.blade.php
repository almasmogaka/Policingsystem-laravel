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
					<td> </td>
				</thead>

				<tbody>

					@foreach($users as $user)
					<tr>
						<th>{{ $user->id }}</th>
						<th>{{ $user->id_no }}</th>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->job_title }}</td>
						<td><a href="{{ route('admin.show', $user->id) }}" class="btn btn-info btn-sm">View</span></a> </td>
					</tr>					
					@endforeach
				</tbody>
				
			</table>
		</div>
	</div>




@endsection
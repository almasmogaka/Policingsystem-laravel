@extends('admins.admin')

@section('content')
<div class="col-md-12">

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
						<td>{{ $crime->created_at }}</td>
						<td>{{ $crime->state->name }}</td>
						<td><a href="{{ route('tests.show', $crime->id) }}" class="btn btn-default btn-sm">View</a></td>
						
					</tr>
				
					@endforeach

				</tbody>
				
			</table>
			<div class="text-center">
				{!! $crimes->links(); !!}
				
			</div>
</div>

@endsection
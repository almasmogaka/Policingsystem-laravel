@extends('layouts.police')

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
						<td>{{ $crime->state->status }}</td>
						<td><a href="{{ route('crimes.show', $crime->id) }}" class="btn btn-default btn-sm">View</a></td>
						<td><a href="{{ route('crimes.edit', $crime->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						
					</tr>
				
					@endforeach

				</tbody>
				
			</table>
			<div class="text-center">
				{!! $crimes->links(); !!}
				
			</div>

</div>
				

@endsection
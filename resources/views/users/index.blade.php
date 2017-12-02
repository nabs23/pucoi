@extends('layouts.lte')

@section('content')
	<div class="col-sm-12">
		<table class="table table-striped">
			<thead class="bg-blue">
				<tr>
					<td>Name</td>
					<td>Email</td>
					<td>Role</td>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td></td>
					</tr><tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
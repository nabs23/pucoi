@extends('layouts.lte')

@section('content')

	<div class="col-md-12">
		<div class="box">
			<div class="box-body">
				<table class="table table-condensed">
					@foreach($users as $user)
						<tr>
							<td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
							<td>{{ $user->email }}</td>
							<td></td>
						</tr>
					@endforeach
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
@endsection
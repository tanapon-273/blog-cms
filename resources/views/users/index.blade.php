@extends('layouts.app')
@section('content')
	<div class="card card-default">
		<div class="card-header">
			User
		</div>
		<div class="card-body">
			@if($users->count()>0)
				<table class="table">
				<thead>
					<th>Name</th>
					<th>Email</th>
					<th></th>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							@if(!$user->isAdmin())
								<td>
								<button type="button" name="button" class="btn btn-primary btn-sm">Make Admin</button>
							</td>
							@endif()
						</tr>

					@endforeach
				</tbody>
			</table>
			@else
				<h3 class="text text-center">No Tag</h3>
			@endif
		</div>
	</div>

@endsection
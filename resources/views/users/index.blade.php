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
								<form class="" action="{{route('user.makeadmin',$user->id)}}" method="post">
									@csrf
									<button type="submit" name="button" class="btn btn-primary btn-sm">Make Admin</button>
								</form>
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
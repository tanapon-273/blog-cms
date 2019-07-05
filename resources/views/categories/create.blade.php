@extends('layouts.app')
@section('content')
	<div class="card card-default">
		<div class="card-header">
			Create Category
		</div>
		<div class="card-body">
			<form action="{{route('categories.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="">Name</label>
					<input class="form-control" type="text" name="name" value="">
				</div>
				<div class="form-group">
					<input class="btn btn-success" type="submit" name="" value="Add Category">
				</div>
			</form>
			
		</div>
	</div>
@endsection
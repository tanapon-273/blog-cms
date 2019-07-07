@extends('layouts.app')
@section('content')
	<div class="card card-default">
		@if($errors->any())
			<div class="alert alert-danger">
				<ul class="list-group">
					@foreach($errors->all() as $error)
						<li class="list-group-item">{{$error}}</li>
					@endforeach
				</ul>
				
			</div>
		@endif
		<div class="card-header">
			{{isset($tag)? "Edit Tag" : "Create Tag"}}
		</div>
		<div class="card-body">
			<form action="{{isset($tag)? route('tags.update',$tag->id) : route('tags.store')}}" method="post">
				@csrf
				@if(isset($tag))
					@method('put')
				@endif
				<div class="form-group">
					<label for="">Name</label>
					<input class="form-control" type="text" name="name" value="{{isset($tag)? $tag->name : ''}}">
				</div>
				<div class="form-group">
					<input class="btn btn-success" type="submit" name="" value="{{isset($tag)? 'Update Tag' : 'Add Tag'}}">
				</div>
			</form>
			
		</div>
	</div>
@endsection
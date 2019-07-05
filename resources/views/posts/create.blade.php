@extends('layouts.app')
@section('content')
	<div class="card card-default">
		<div class="card-header">
			Create Post
		</div>
		<div class="card-body">
			<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" value="" class="form-control">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea name="description" rows="4" cols="4" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" rows="8" cols="8" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" name="image" value="" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="" value="Create Post" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
@endsection
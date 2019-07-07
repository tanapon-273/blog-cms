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
			{{isset($post)? 'Edit Post' : 'Create Post'}}
		</div>
		<div class="card-body">
			<form action="{{isset($post)?route('posts.update',$post->id):route('posts.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				@if(isset($post))
					@method('PUT')
				@endif
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" value="{{isset($post)? $post->title : ''}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea name="description" rows="4" cols="4" class="form-control">{{isset($post)? $post->description : ''}}</textarea>
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<input id="x" value="{{isset($post)? $post->content : ''}}" type="hidden" name="content">
  					<trix-editor input="x"></trix-editor>
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" name="image" value="" class="form-control">
				</div>
				<div class="form-group">
					<label for="image">Category</label>
					<select class="form-control" name="category">
						@foreach($categories as $category)
							<option value="{{$category->id}}"
								@if(isset($post))
									@if($category->id == $post->category_id)
									selected
									@endif
								@endif
								>{{$category->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<input type="submit" name="" value="{{isset($post)? 'Update Post' : 'Create Post'}}" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css">
@endsection
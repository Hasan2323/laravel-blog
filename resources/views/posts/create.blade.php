@extends ('layouts.master')

@section ('content')
		
		<div class="container">
			<h2>Publish a new post</h2>
			<hr>

			@include('layouts.formerrors')

			<form method="post" action="../posts">
				{{ csrf_field() }}

				<div class="form-group">
				    <label for="title">Title</label>
				    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
				    <small id="titleHelp" class="form-text text-muted">Not more than 100 words.</small>
				</div>

				<div class="form-group">
				    <label for="body">Body</label>
				    <textarea id="body" name="body" class="form-control" required>{{ old('body') }}</textarea>
				</div>

				
				<button type="submit" class="btn btn-primary" name="publish">Publish</button>
			</form>


		</div>
		<br>																																																						

@endsection
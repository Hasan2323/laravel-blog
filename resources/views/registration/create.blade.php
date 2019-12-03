@extends('layouts.master');


@section('content')

	<div class="col-sm-8">
		<h1>Register</h1>

		@include('layouts.formerrors')

		<form method="post" action="register">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" class="form-control" id="password" required>
			</div>

			<div class="form-group">
				<label for="password_confirmation">Confirm Password:</label>
				<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>

		</form>
		Already have an account? <a href="login">Sign In!</a>

			
	</div>

@endsection
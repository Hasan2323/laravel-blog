@extends('layouts.master');


@section('content')

	<div class="col-sm-8">
		<h1>Sign In</h1>
		<br>

		@include('layouts.formerrors')

		<form method="post" action="login">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input type="email" name="email" class="form-control" id="email" required>
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" class="form-control" id="password" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Log In</button>
			</div>


		</form>

		New here? <a href="register">Register now!</a>


			
	</div>

@endsection
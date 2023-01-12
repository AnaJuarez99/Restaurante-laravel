@extends('layouts.app')
@section("content")

@if(session()->has('mensaje'))
<div class="alert alert-success " role="alert">
    {{session('mensaje')}}
</div>
@endif

	<div >
		<img class="contenedor2" src="./fotos/fondo_login.jpg" />

		<div class="centrado2">

			<div class="formulario2">
				<form action="{{ route('/') }}">
					<h1>INICIO DE SESIÓN</h1>

					<label for="email"><b>Email</b></label>
					<br>
					<input type="text" placeholder="Enter Email" name="email" required>
					@error('email')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
					<br><br>
					<label for="psw"><b>Contraseña</b></label>
					<br>
					<input type="password" placeholder="Enter Password" name="password" required>
					@error('password')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
					<br>
					<br>
					<button type="submit">Login</button>
					<br>
					<a class="registro"  href="{{ route('registro') }}">REGISTRAR </a>
				</form>
			</div>

		</div>

	</div>

	<hr>

	


	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
		crossorigin="anonymous"></script>

@endsection
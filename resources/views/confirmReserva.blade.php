@extends('layouts.app')
@section("content")
	{{-- <div >
		<img class="contenedor2" src="./fotos/fondo.jpg" />


		<div class="container">
			<h1><u>MIS RESERVAS</u></h1>
			<table class="confirm">
				<thead class="resp">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Personas</th>
							<th>Fecha</th>
							<th>Hora</th>
							<th>Factura</th>
						</tr>
					</thead>
					<tbody>
						@foreach ( $savedate as $calldates)
							
							<tr>
								<td>{{$calldates->nombre .''. $calldates->apellido}}</td>
								<td>{{$calldates->persona }}</td>
								<td>{{$calldates->fecha}}</td>
								<td>{{$calldates->hora}}</td>
								<td><button type="button"> <img src="./fotos/download.png" /></button></td>

							</tr>

						@endforeach

					</tbody>
				</thead>

			</table>



		</div>
	</div> --}}

		
			<div >
				<img class="contenedor2" src="./fotos/fondo.jpg" />


				<div class="aa">
					<div class="container6">
						<h1 class="r"><u>MIS RESERVAS</u></h1>
						<table class="confirm">
							<thead class="resp">
								<thead>
									<tr>
										<th>Fecha</th>
										<th>Hora</th>
										<th>Menú</th>
										<th>Personas</th>
										<th>Precio Menú</th>
										<th>Precio Total</th>
										<th>Opciones</th>
									</tr>
								</thead>
							</thead>

							@isset($reser)
								@foreach ($reser as $r )
			
								<tr>
									<td>{{$r->horario->fecha}}</td>
									<td>{{$r->horario->hora}}</td>
									<td>{{$r->menu->nombre}}</td>
									<td>{{$r->num_personas}}</td>
									<td>{{$r->menu->precio}}</td>
									<td>{{$r->menu->precio*$r->num_personas}}</td>
									<td></td>
									
								</tr>
									
								@endforeach
							@endisset

							
						</table>
					</div>
				</div>
			</div>

	<hr>

@endsection

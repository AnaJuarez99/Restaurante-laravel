@extends('layouts.app')
@section("content")
	<div class="contenedor">
		<img src="./fotos/fondo.jpg" />

		<div class="centradoInit">
			<h1>LA YEGUADA</h1>
			<p>Restaurante especializado en cocina tradicional cordobesa.</p>

			<p> En La Yeguada te ofrecemos lo mejor de la gastronomía cordobesa, con los platos más
				tradicionales, las tapas más suculentas y los más exquisitos vinos de la tierra.</p>


		</div>

	</div>

	<div class="noticia">
		<div >
			<div >
				<img class="derecha" src="./fotos/restaurant1.jpg" >
			</div>

			<div >
				<h1>Disfruta de una experiencia culinaria en La Yeguada</h1>
				<hr>
				<p>La cocina de La Yeguada es la máxima expresión de nuestro
					amor por la gastronomía de calidad y el trabajo bien hecho
					así que sólo usamos productos de nuestra tierra, de la máxima
					calidad y seleccionados para que comer con nosotros sea un placer.
				</p>
			</div>

			
		</div>

	</div>
	<hr>
	<div id="carta" class="container-sm"></div>
		<div class="row">
			<div class="col">
				<img  src="./fotos/entrante.PNG" >
			</div>
	
	
			<div  class="col">
				<img src="./fotos/tierra.PNG" >
			</div>
	
			<div  class="col">
				<img src="./fotos/tipico.PNG" >
			</div>
		</div>

	</div>

	<hr>

	<hr>
@endsection
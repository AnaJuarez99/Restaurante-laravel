@extends('layouts.app')
@section("content")
	

		
			<div >
				<img class="contenedor2" src="./fotos/fondo.jpg" />
				<!--<div class="container">

					<h2>Common Fruits</h2>
					<table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
					   <thead class="thead-dark">
						  <tr>
							<th>Fecha</th>
							<th>Hora</th>
							<th>Menú</th>
							<th>Personas </th>
							<th>Precio Menú</th>
							<th>Precio Total</th>
							<th>Opciones</th>
						  </tr>
					   </thead>
					   <tbody>
						@isset($reser)
						@foreach ($reser as $r )
	
						<tr>
							<td>{{$r->horario->fecha}}</td>
							<td>{{$r->horario->hora}}</td>
							<td>{{$r->menu->nombre}}</td>
							<td>{{$r->num_personas}}</td>
							<td>{{$r->menu->precio}}</td>
							<td>{{$r->menu->precio*$r->num_personas}}</td>
							<td>option</td>
							
						</tr>
							
						@endforeach
					@endisset
					   </tbody>
					</table>
				 
				 </div>-->
				 <!-- /.container -->

					<div class="container6">
						<h1 class="r"><u>MIS RESERVAS</u></h1>
						<table class="table-bordered">
							<thead>
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
									<form action="/confirmReserva" method="POST" id="reservation">
										@csrf
										<td>
											<input type="hidden" id="cancel" name="cancel" value="{{$r->id}}">
											<button class="cancelar" type="submit">Cancelar</button>
										</td>
									</form>
									
									
									
								</tr>
									
								@endforeach
							@endisset

							
						</table>
					</div>
				
			</div>

	<hr>

@endsection
<!--
<script>
	$(document).ready(function() {

   
// inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
$('.table-responsive-stack').each(function (i) {
   var id = $(this).attr('id');
   //alert(id);
   $(this).find("th").each(function(i) {
	  $('#'+id + ' td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+             $(this).text() + ':</span> ');
	  $('.table-responsive-stack-thead').hide();
	  
   });
   

   
});





$( '.table-responsive-stack' ).each(function() {
var thCount = $(this).find("th").length; 
var rowGrow = 100 / thCount + '%';
//console.log(rowGrow);
$(this).find("th, td").css('flex-basis', rowGrow);   
});




function flexTable(){
if ($(window).width() < 768) {
   
$(".table-responsive-stack").each(function (i) {
   $(this).find(".table-responsive-stack-thead").show();
   $(this).find('thead').hide();
});
   
 
// window is less than 768px   
} else {
   
   
$(".table-responsive-stack").each(function (i) {
   $(this).find(".table-responsive-stack-thead").hide();
   $(this).find('thead').show();
});
   
   

}
// flextable   
}      

flexTable();

window.onresize = function(event) {
 flexTable();
};






// document ready  
});




</script>-->
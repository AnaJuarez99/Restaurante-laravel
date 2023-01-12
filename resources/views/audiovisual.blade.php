@extends('layouts.app')
@section("content")
	
<br>
<div  class="multimedia">


		<div class="audios">
			
			<div class="row">
				

					<div class="col">
						<audio controls >
							<source src="..\public\recursos\sonido\audio1.ogg" type="audio/ogg">
						
				
						</audio>
					</div>
				
				<div class="col">
					<audio controls >
						<source src="..\public\recursos\sonido\audio2.mp3" type="audio/mpeg">
					
			
					</audio>
				</div>
				
				<div class="col">
					<audio controls >
						<source src="..\public\recursos\sonido\audio3.mp3" type="audio/mpeg">
						</audio>
			
			</div>		
		</div>
		
<br>
	

		
		<div class="video">
			<div class="row">
				<div class="col">
					<video width="300" height="200" controls>
						<source src="..\public\recursos\video\video1.mp4" type="video/mp4">
			
					</video>
				</div>

					<div class="col">

						<video width="300" height="200" controls>
							<source src="..\public\recursos\video\video3.webm" type="video/webm">
						

						</video>
					</div>

				<div class="col">

					<video width="300" height="200" controls>
						<source src="..\public\recursos\video\video2.mp4" type="video/mp4">

					</video>
				</div>
			</div>
		</div>


	
</div>
	<hr>

	<hr>
@endsection
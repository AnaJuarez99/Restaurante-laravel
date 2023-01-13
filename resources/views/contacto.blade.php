@extends('layouts.app')
@section("content")


@if(session()->has('mensaje'))
<div class="alert alert-success " role="alert">
    {{session('mensaje')}}
</div>
@endif



<div >
    <img class="contenedor2" src="./fotos/fondo_login.jpg" />

    <div class="centrado3" style="background: rgb(165, 154, 154)">

        <div class="formulario3 text-align:center" >
            <form action="/contacto" method="POST">
                <h1>CONTACTO</h1>
                @csrf

                <label for="nombre">Nombre</label><br>
                <input type="text" id="nombre" name="nombre"  placeholder="Tu nombre" value="{{old('nombre')}}">

                @error('nombre')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>

               
                <label for="asunto">Asunto</label><br>
                <input type="text" id="asunto" name="asunto" placeholder="Tu asunto" value="{{old('asunto')}}"><br>
                @error('asunto')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>

                <div class="row">
                    <div class="col">
                        <label for="email">Email</label>
                        <br>
                        <input type="text" id="email" placeholder="Tu email" name="email" value="{{old('email')}}">
                        @error('email') <p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
                    </div>
                <br>
                    <div class="col">
                        <label for="email_confirmation">Confirmacion email</label>
                        <br>
                        <input type="email" id="email_confirmation"  name="email_confirmation" placeholder="Tu email de confirmacion" >
                        @error('email de confirmacion') <p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
                    </div>
            </div>

                <label for="mensaje">Mensaje</label><br>
                <input type="text" id="mensaje" name="mensaje" placeholder="Tu mensaje" value="{{old('mensaje')}}">
                @error('mensaje') <p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
                <br>
                <input type="submit" value="Submit" class="border">
            </form>
        </div>

    </div>

</div>





@endsection
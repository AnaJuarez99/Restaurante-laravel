<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
    
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
        <link href='https://fonts.googleapis.com/css?family=Cormorant SC' rel='stylesheet'>
    
        
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Create Fullcalender CRUD Events in Laravel</title>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
       
    
        <title>LA YEGUADA</title>
<!--
        <style>
            /*hojasauditivas*/
        h1, h2{
            voice-family: paul;  
            voice-stress: moderate; 
            stress: 20;
            richness: 90;
            cue-before: url("ping.au")
        }
        p {  
            voice-family: female;  
            voice-balance: left;  
            voice-pitch: high;  
            voice-volume: -6dB;  
            }
        </style>
    -->

    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div id="app">

            <header>
                <nav class="navbar">
                    <!-- LOGO -->
                    <div class="logo">
                        <img id="logo" src="./fotos/logoyeguadarecor.png" alt="logo">
                    </div>
                    <!--MENU NAVIGACION  -->
                    <ul class="nav-links">
                        <!-- CHECKBOX -->
                        <input type="checkbox" id="checkbox_toggle" />
                        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
                        <!--MENUS NAVIGACION  -->
                        <div class="menu">
                            <li><a class="btn-grow-skew" href="{{ route('/') }}">Inicio</a></li>
                            <!--<li><a class="btn-grow-skew" href="{{ route('reserva') }}">Reservas</a></li>-->
                            <li><a class="btn-grow-skew" href="{{ route('reserva2') }}">Reservas</a></li>
                            <li><a class="btn-grow-skew" href="{{ route('/') }}#carta">Carta</a></li>
                            <li><a class="btn-grow-skew" href="{{ route('audiovisual') }}">MultiMedia</a></li>
                            <li><a class="btn-grow-skew" href="{{ route('login') }}">Login</a></li>
                            <li><a class="btn-grow-skew" href="{{ route('contacto') }}">Contacto</a></li>
                        </div>
                    </ul>
                </nav>
            </header>






        <main class="py-4">
            @yield('content')
        </main>



        <footer >
            <div class="row justify-content-between">
    
                <div class="col-12 col-xxl-4 text-center">
                    <p><b>SÍGUENOS EN REDES</b></p>
                    <a href="https://www.youtube.com/"><img id="youtube" src="fotos/youtube.png" alt="youtube"></a>
                    <a href="https://es-es.facebook.com/"><img id="facebook" src="fotos/face.png" alt="facebook"></a>
                    <a href="https://www.instagram.com/"><img id="instagram" src="fotos/inst.png" alt="instagram"></a>
                </div>
                <br>
                <div class="col-12 col-xxl-4 text-center">
                    <p><b>CONTACTO</b></p>
                    <p>(+34) 957 107 859</p>
                    <p>C/López Amo, 10 local-8</p>
                    <p>Córdoba, 14006 – Spain</p>
                    <p> info@layeguada.com</p>
                </div>
                <br>
                <div class="col-12 col-xxl-4 text-center">
                    <p><a href="{{ route('AvisoLegal') }}">Avisos legales</a></p>
                    <p><a href="{{ route('PoliticaPriv') }}">Política de privacidad</a></p>
                    <p><a href="{{ route('PoliticaCook') }}">Política de cookies</a></p>
                </div>
    
            </div>
        </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>




    </div>
</body>
</html>

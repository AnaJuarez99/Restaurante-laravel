@extends('layouts.app')
@section("content")


@if(session()->has('mensaje'))
<div class="alert alert-success " role="alert">
    {{session('mensaje')}}
</div>
@endif

    <div class="contenedor8">
        <img src="./fotos/fondo_login.jpg" />

      

                <div class="container mt-5" style="max-width: 540px">
                    
                    <div id='full_calendar_events' class="micalendar overflow-auto"></div>

                       <div id="bloqueHoras" class="d-none" style="background-color: rgb(0, 0, 0)">
                        <p style="color: white">HORAS DISPONIBLES</p>
                        <div id="horas" style="background-color: rgb(216, 216, 216)">
                        </div>
                    </div> 
                </div>


    </div>

    {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/locale/es.js'></script>


    
    <script>
        $(document).ready(function () {
            var SITEURL = "{{ url('/') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var calendar = $('#full_calendar_events').fullCalendar({
                editable: true,
                locale: 'es',
                editable: true,
                events: SITEURL + "/calendar-event",
                displayEventTime: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                /*select: function (event_start, event_end, allDay) {
                    var event_name = prompt('Event Name:');
                    if (event_name) {
                        var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                        var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: SITEURL + "/calendar-crud-ajax",
                            data: {
                                event_name: event_name,
                                event_start: event_start,
                                event_end: event_end,
                                type: 'create'
                            },
                            type: "POST",
                            success: function (data) {
                                displayMessage("Event created.");
                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    title: event_name,
                                    start: event_start,
                                    end: event_end,
                                    allDay: allDay
                                }, true);
                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                },
                eventDrop: function (event, delta) {
                    var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                    var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                    $.ajax({
                        url: SITEURL + '/calendar-crud-ajax',
                        data: {
                            title: event.event_name,
                            start: event_start,
                            end: event_end,
                            id: event.id,
                            type: 'edit'
                        },
                        type: "POST",
                        success: function (response) {
                            displayMessage("Event updated");
                        }
                    });
                },*/
                eventClick: function (event) {
              
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");

                
                    $.ajax({
                        
                        type: "POST",
                        url: SITEURL + '/calendar-crud-ajax',
                        data: {
                            fecha: start,
                            type: 'delete'
                        },
                        
                        success: function (response) { var contador=0;
                            document.getElementById("bloqueHoras").classList.remove('d-none');
                            var element = document.getElementById("horas");
                            element.innerHTML='';
                           
                            response.forEach(function (response){
                            
                            element.insertAdjacentHTML("afterbegin","<input id='id"+contador+"' value='"+response['id']+"' type='hidden'>"+""+"</input><input id='data' value='"+start+"' type='hidden'>"+""+"</input> <a class='btnhora'><button  style='border:black 2px solid' id='"+contador+"' value='"+response['hora']+"' onClick='datos(this)'>"+response['hora']+"</button></a></br>")
                            contador++;
                            });
                            $('html,body').animate({
                                scrollTop: $("#bloqueHoras").offset().top},
                                'slow');

                        }
                    });
                    }
            });
        });
        function displayMessage(message) {
            toastr.success(message, 'Event');            
        }

        function datos(element) {
            
            var searchID=element.id
            var date =document.getElementById("data").value;
            var hora =document.getElementById(searchID).value;
            var idHour =document.getElementById("id"+searchID).value;

            window.location.href = "reserva?date=" + date + "&hora=" + hora+ "&id="+idHour;          
        }
    </script>
    


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>


@endsection
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid'; 
import listPlugin from '@fullcalendar/list';
import moment from 'moment';


import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-icons/font/bootstrap-icons.css'; // needs addition
import bootstrap5Plugin from '@fullcalendar/bootstrap5';

document.addEventListener('DOMContentLoaded',function(){



    $.ajaxSetup ({ headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    var calendarEl=document.getElementById('calendar');
    
   let calendar = new Calendar(calendarEl, {
    plugins: [bootstrap5Plugin, dayGridPlugin, timeGridPlugin, listPlugin],
    initialview: 'dayGridMonth', 
    contentHeight: 400,
    headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridHonth,timeGridweek,listweek',
    },
    themeSystem: 'bootstrap5',
    editable: false,
    firstDay: 1,

    /* Calling the route /fullcalender and returning the data to the calendar. */
    events: "/fullcalender",
    eventColor: '#198754',
    selectable: true,
    eventClick: function (event) { 
        let start=moment(event.event.start).format('Y-MM-DD'); 
        $.ajax({

            type: "POST",
            
            url: '/fullcalenderAjax',
            
            data: {
                fecha: 'start',
                type: 'showHours'
            },
            success: function (response) {
                document.getElementById("bloqueHoras").classList.remove('d-none');
                var element = document.getElementById("horas");
                element.innerHTML='';
                response.forEach(function(response) {
                    element.insertAdjacentHTML("afterbegin","<a class='col-1' href='/re'></a>") //Cambiar incompleto
                });
                
                $('html, body').animate({
                    scrollTop: $("#bloqueHoras").offset().top},
                    'slow');
                }
            });
        }
   });

});
calendar.render();
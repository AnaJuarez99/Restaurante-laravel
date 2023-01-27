@extends('layouts.app')
@section("content")


@if(session()->has('mensaje'))
<div class="alert alert-success " role="alert">
    {{session('mensaje')}}
</div>
@endif

    <div class="contenedor1">
        <img src="./fotos/fondo.jpg" />

        <div class="centradoReser">

            <div class="row">
                
                
                <div class="root">
                    
                    
                    @error('fecha')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
            
                </div>
               
                <!--
                
                <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
                <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
                <script  type="text/javascript" >

                            class Calendar {
                constructor(id) {
                    this.cells = [];
                    this.selectedDate = null;
                    this.currentMonth = moment();
                    this.elCalendar = document.getElementById(id);
                    this.showTemplate();
                    this.elGridBody = this.elCalendar.querySelector('.grid__body');
                    this.elMonthName = this.elCalendar.querySelector('.month-name');
                    this.showCells();
                }

                showTemplate() {
                    this.elCalendar.innerHTML = this.getTemplate();
                    this.addEventListenerToControls();
                }

                getTemplate() {
                    let template = `
                        <div class="calendar__header">
                            <button type="button" class="control control--prev">&lt;</button>
                            <span class="month-name">dic 2019</span>
                            <button type="button" class="control control--next">&gt;</button>
                        </div>
                        <div class="calendar__body">
                            <div class="grid">
                                <div class="grid__header">
                                    <span class="grid__cell grid__cell--gh">Lun</span>
                                    <span class="grid__cell grid__cell--gh">Mar</span>
                                    <span class="grid__cell grid__cell--gh">Mié</span>
                                    <span class="grid__cell grid__cell--gh">Jue</span>
                                    <span class="grid__cell grid__cell--gh">Vie</span>
                                    <span class="grid__cell grid__cell--gh">Sáb</span>
                                    <span class="grid__cell grid__cell--gh">Dom</span>
                                </div>
                                <div class="grid__body">

                                </div>
                            </div>
                        </div>
                    `;
                    return template;
                }

                addEventListenerToControls() {
                    let elControls = this.elCalendar.querySelectorAll('.control');
                    elControls.forEach(elControl => {
                        elControl.addEventListener('click', e => {
                            let elTarget = e.target;
                            if (elTarget.classList.contains('control--next')) {
                                this.changeMonth(true);
                            } else {
                                this.changeMonth(false);
                            }
                            this.showCells();
                        });
                    });
                }

                changeMonth(next = true) {
                    if (next) {
                        this.currentMonth.add(1, 'months');
                    } else {
                        this.currentMonth.subtract(1, 'months');
                    }
                }

                showCells() {
                    this.cells = this.generateDates(this.currentMonth);
                    if (this.cells === null) {
                        console.error('No fue posible generar las fechas del calendario.');
                        return;
                    }

                    this.elGridBody.innerHTML = '';
                    let templateCells = '';
                    let disabledClass = '';
                    for (let i = 0; i < this.cells.length; i++) {
                        disabledClass = '';
                        if (!this.cells[i].isInCurrentMonth) {
                            disabledClass = 'grid__cell--disabled';
                        }
                        // <span class="grid__cell grid__cell--gd grid__cell--selected">1</span>
                        templateCells += `
                            <span class="grid__cell grid__cell--gd ${disabledClass}" data-cell-id="${i}">
                                ${this.cells[i].date.date()}
                            </span>
                        `;
                    }
                    this.elMonthName.innerHTML = this.currentMonth.format('MMM YYYY');
                    this.elGridBody.innerHTML = templateCells;
                    this.addEventListenerToCells();
                }

                generateDates(monthToShow = moment()) {
                    if (!moment.isMoment(monthToShow)) {
                        return null;
                    }
                    let dateStart = moment(monthToShow).startOf('month');
                    let dateEnd = moment(monthToShow).endOf('month');
                    let cells = [];

                    // Encontrar la primer fecha que se va a mostrar en el calendario
                    while (dateStart.day() !== 1) {
                        dateStart.subtract(1, 'days');
                    }

                    // Encontrar la última fecha que se va a mostrar en el calendario
                    while (dateEnd.day() !== 0) {
                        dateEnd.add(1, 'days');
                    }

                    // Genera las fechas del grid
                    do {
                        cells.push({
                            date: moment(dateStart),
                            isInCurrentMonth: dateStart.month() === monthToShow.month()
                        });
                        dateStart.add(1, 'days');
                    } while (dateStart.isSameOrBefore(dateEnd));

                    return cells;
                }

                addEventListenerToCells() {
                    let elCells = this.elCalendar.querySelectorAll('.grid__cell--gd');
                    elCells.forEach(elCell => {
                        elCell.addEventListener('click', e => {
                            let elTarget = e.target;
                            if (elTarget.classList.contains('grid__cell--disabled') || elTarget.classList.contains('grid__cell--selected')) {
                                return;
                            }
                            // Deselecionar la celda anterior
                            let selectedCell = this.elGridBody.querySelector('.grid__cell--selected');
                            if (selectedCell) {
                                selectedCell.classList.remove('grid__cell--selected');
                            }
                            // Selecionar la nueva celda
                            elTarget.classList.add('grid__cell--selected');
                            this.selectedDate = this.cells[parseInt(elTarget.dataset.cellId)].date;
                            // Lanzar evento change
                            this.elCalendar.dispatchEvent(new Event('change'));
                        });
                    });
                }

                getElement() {
                    return this.elCalendar;
                }

                value() {
                    return this.selectedDate;
                }
                }

          
                
                </script>
                <script type="text/javascript">
                    let calendar = new Calendar('calendar');
                    calendar.getElement().addEventListener('change', e => {
                       // console.log(calendar.value().format('LL'));
                        document.getElementById('fecha').value=calendar.value().format('LL');
                    });

                </script>

            -->
            </div> 

           
            
            <form name="formulario" action="/reserva" method="POST" >
                @csrf
                <input type="hidden" name="fecha" id="fecha" value="">
                <input type="hidden" name="hora" id="hora" value="">
                <input type="hidden" name="id" id="id" value="">

                

                <div class="formulario1">
                    <input id="mostrarHora" value="" type="text" disabled>


                    <div class="row">
                        <div class="col">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" id="nombre" class="form-control" placeholder="Enter name" name="nombre" value="{{old('nombre')}}">
                            @error('nombre')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
                        </div>
                        <div class="col">
                            <label for="apellido" class="form-label">Apellidos:</label>
                            <input type="text" id="apellido" class="form-control" placeholder="Enter last name" name="apellido" value="{{old('apellido')}}">
                            @error('apellido')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
                        </div>
                        <br>
                    </div>

                   <!-- <div class="row">
                        <div class="col">
                            <label for="hora" class="form-label ">Hora:</label>
                            <input type="time" id="hora" class="hora" name="hora"  value="{{old('hora')}}">
                            @error('hora')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col">
                            <label for="persona" class="form-label">Personas:</label>
                            <select  name="persona" id="lang" value="{{old('persona')}}">
                                <option >2 </option>
                                <option >4 </option>
                                <option >6 </option>
                            </select>
                            @error('persona')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col">
                            <label for="pwd" class="form-label">Móvil:</label>
                            <input type="tel" id="pwd" class="hora" placeholder="Telephone" name="tel" value="{{old('tel')}}">
                            @error('tel')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
                        </div>
                    </div>
                    


                    <div class="row">
                        <div class="col">
                            <label for="email" class="form-label">Email:</label>
                            <input type="text" id="email" class="form-control" placeholder="Enter email" name="email" value="{{old('email')}}">
                            @error('email')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>

                        </div>

                        
                            

                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="tarjeta" class="form-label">Nº Tarjeta:</label>
                            <input type="num" id="tarjeta" class="form-control" placeholder="Enter target" name="tarjeta" value="{{old('tarjeta')}}">
                            @error('tarjeta')<p class="alert alert-danger mt-7"> {{$message}} @enderror </p>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div>
                            <button class="reservar" type="submit" >RESERVAR </button>
                            <br>
                        
                            <!--<a class="misreservas"  href="{{route('confirmReserva')}}">MIS RESERVAS </a>-->

                        </div>
                    
                            
                        
                    </div>
                
                </div>
            </form>

        </div>

    </div>
    


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        var url= new URLSearchParams(window.location.search);
        var date =document.getElementById("fecha");
        var hora =document.getElementById("hora");
        var idHour =document.getElementById("id");

        var saveDate= url.get("date");
        var saveHora= url.get("hora");
        var saveId= url.get("id");

        date.value= saveDate;
        hora.value= saveHora;
        idHour.value= saveId;

        document.getElementById("mostrarHora").value="La fecha elegida es " +saveDate+ " a las "+saveHora;

    </script>


@endsection
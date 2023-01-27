<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reserva;
use App\Models\Invitado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $datos = DB::select('select * from reserva where id=1');
        return view("/reserva",['savedate'=>$datos]); */

       // return view ("confirmReserva")->with(["reser"=>User::all()]);

       return view("reserva")->with(["reser"=>User::all()]);
       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->persona);
        $this-> validate($request,[
            'nombre'=> 'required| min:3| max:30',
            'apellido'=> 'required| min:5| max:120',
            'persona'=> 'required',
            'tel'=> 'required| min:0| max:9',
            'email'=> 'required| min:5| max:120',
            'tarjeta'=> 'required| min:16| max:16',
            'fecha'=> 'required| min:1',
            'hora'=> 'required',
            'id'=> 'required',

        ]);

        //Metodo estatico para crear registros
        //Equivalente al método que realice INSERT INTO
       /*  Reserva::create([
            'nombre'=> $request-> get('nombre'),
            'apellido'=> $request-> get('apellido'),
            'hora'=> $request-> get('hora'),
            'persona'=> $request->persona,
            'tel'=> $request-> get('tel'),
            'email'=> $request-> get('email'),
            'tarjeta'=> $request-> get('tarjeta'),
            'fecha'=> $request-> get('fecha'),


        ]); */
        

       // $datos = DB::select('select * from reserva where id=1');

        //Redireccionar helper redirect
        //$mensaje = "¡¡Reserva confirmada!!";
       // return view("/confirmReserva" ); //,['savedate'=>$datos])->with('mensaje', $mensaje);

       $id_cliente=null;
       $id_invitado=null;



    if(Auth::user()){
        $id_cliente= Auth::user()->id;
        
        
       }else{
        $invitado = Invitado::create([
            'nombre' =>$request->get('nombre'),
            'apellidos' =>$request->get('apellido'),
            'telefono' =>$request->get('tel'),
            'email' =>$request->get('email'),

        ]);

        $id_invitado= $invitado->id;
       }
        

        $reserva = Reserva::create([
            'id_invitado'=>$id_invitado,
            'id_cliente'=>$id_cliente,
            'id_menu'=>1,
            'id_mesa'=>1,
            'num_tarjeta' =>$request->get('tarjeta'),
            'fecha_reserva' =>$request->get("id"),
            'num_personas' =>$request->get('persona'),

        ]);



        

        if(Auth::user()){
            $id_cliente=Auth::user()->id;
            return view('confirmReserva')->with(["reser"=>Reserva::where('id_cliente',$id_cliente)->get()]);

            
     
         
         }else{
     
             return view('layeguada');
     
         }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        
        if(Auth::user()){
            $id_cliente=Auth::user()->id;
            return view('confirmReserva')->with(["reser"=>Reserva::where('id_cliente',$id_cliente)->get()]);

            
     
         
         }else{
     
             return view('layeguada');
     
         }

       // return view('confirmReserva')->with(["reser"=>Reserva::all()]);
    }

    public function cancelReserva(Request $request)
    {
        
        if(Auth::user()){
            $id_cliente=Auth::user()->id;
            $delete=$request->get('cancel');

            $deleteReser="";
            $deleteFinal=Reserva::find($delete);
            if($deleteFinal!=null){
                $deleteFinal->delete();
            }else{
                
            }

            return view('confirmReserva')->with(["reser"=>Reserva::where('id_cliente',$id_cliente)->get()]);
     
         
         }else{
     
             return view('layeguada');
     
         }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

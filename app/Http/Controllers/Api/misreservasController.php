<?php

namespace App\Http\Controllers\Api;

use App\Models\Horario;
use App\Models\Reserva;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class misreservasController extends Controller
{
     
    public function addReserva(Request $request)
    {

        $reserva = Reserva::create([
        
            'id_cliente'=>$request ->id_cliente,
            'id_menu'=>$request ->id_menu,
            'id_mesa'=>$request ->id_mesa,
            'num_tarjeta' =>$request->num_tarjeta,
            'fecha_reserva' =>$request->fecha_reserva,
            'num_personas' =>$request->num_personas,

        ]);

        if(!$reserva){
            return response()->json(["Error"=>"No se pudo crear la reserva"], 404);
        }

            return response()->json(["Data"=>$reserva]);

    }

    public function misReservas(Request $request)
    {
        $id_cliente= $request ->id_cliente;
        if(!$id_cliente){
            return response()->json(["Error"=>"No se pudo crear la reserva"], 404);
        }
        $reserva= Reserva::where('id_cliente',$id_cliente)->get();
        return response()->json(["Data"=>$reserva]);

    }

    public function deleteReserva(Request $request)
    {
        $id_cliente= $request ->id;
        if(!$id_cliente){
            return response()->json(["Error"=>"No se pudo borrar la reserva"], 404);
        }
        $reserva=Reserva::find($id_cliente);
        if(!$reserva){
            return response()->json(["Error"=>"No se pudo borrar la reserva"], 404);
        }
        $reserva->delete();
        return response()->json(["Data"=>$reserva]);

    }

    public function gethorarios(Request $request){
        $data = Horario::select('fecha')
                ->where('estado','disponible')
                ->groupBy('fecha')
                ->get();
  
       if (!$data) {
           return response()->json(['error' => 'User Reserve not found'], 404);
       }

       return response()->json(['data' => $data]);

    }

    public function gethoras(Request $request){

        $fecha = $request->fecha;

    $data = Horario::where([
        ['fecha','=',$fecha],
        ['estado','disponible']
    ])->get();
                
    $horas=array();
     
    foreach($data as $valor){
        $horas[] = array(
            'id' => $valor["id"],
            'hora' => date('H:i', strtotime($valor["hora"])),

    );
    }

    return response()->json(['data' => $horas]);

}
}
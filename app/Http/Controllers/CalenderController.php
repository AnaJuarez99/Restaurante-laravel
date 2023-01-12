<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\CrudEvents;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {  
            $result=Horario::select('fecha') 
        ->where('estado', 'disponible')
        ->groupBy('fecha')
        ->get();
        
        $data=array();
        
        foreach($result as $row)
        {
            $data[] = array(
            'id' => $row["id"], 
            'title'=>"",
            'start' => $row["fecha"],
            'end' => $row["fecha"]
            
            );
        
        }
        return response()->json($data);
        }
        return view('reserva2');
    }
 
    public function calendarEvents(Request $request)
    {
 
        switch ($request->type) {
          
  
           case 'delete':
            if($request->ajax()) {  
                $data = horario::where([
                    ['fecha','=',$request->get('fecha')],
                    ['estado','disponible']
                ])->get();
                    
    
                    $horas=array();
        
                        foreach($data as $valor){
                            $horas[] = array(
                                'id' => $valor["id"],
                                'hora' => date('H:i', strtotime($valor["hora"])),
    
                            );
                        }
     
                    return response()->json($horas);
                    break;
            }
            return view('reserva2');
            
             
           default:
             # ...
             break;
        }
    }
}

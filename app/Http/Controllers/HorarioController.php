<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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

    /*
    public function events(){

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


    public function ajax(Request $request)
    {
        switch ($request->type) {
            case 'showHours':
                $result=Horario::where([
        
                ['fecha', '=', $request->get('fecha')],
                ['estado', 'disponible']
                ])->get();
        
                $horas=array();

            foreach($result as $row)
            {
                $horas[] = array(
                'id' => $row["id"],
                'hora' => date('H:i', strtotime($row["hora"])),

                );
            }
            return response()->json($horas);

            break;
        }
        
    }*/
}

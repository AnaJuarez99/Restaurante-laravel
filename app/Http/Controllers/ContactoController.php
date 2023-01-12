<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("contacto");
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
       // dd($request->get("nombre"));
        $this-> validate($request,[
            'nombre'=> 'required| min:3| max:30',
            'asunto'=> 'required| min:5| max:120',
            'email'=> 'required| email | confirmed',
            'mensaje'=> 'required| min:5| max:500',

        ]);

        //Metodo estatico para crear registros
        //Equivalente al método que realice INSERT INTO
        Contacto::create([
            'nombre'=> $request-> get('nombre'),
            'asunto'=> $request-> get('asunto'),
            'email'=> $request-> get('email'),
            'mensaje'=> $request-> get('mensaje'),

        ]);

        //Redireccionar helper redirect
        $mensaje = "Hemos recibido su mensaje. En breve nos pondremos en contacto con usted";
        return redirect("/contacto")->with('mensaje', $mensaje);
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

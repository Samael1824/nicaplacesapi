<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\PersonaNatural;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persona=Persona::all();
       
        return response()->json($persona);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $persona = new Persona;
        $personaNatural = new PersonaNatural;

        $persona->nombre = $request->nombre;
        $persona->telefono = $request->telefono;
        $persona->correo = $request->correo;
        $persona->foto = $request->foto;#reparar
        $persona->save();

        $personaNatural->id_persona = $persona->id;
        $personaNatural->apellido = $request->apellido;
        $personaNatural->cedula = $request->cedula;
        $personaNatural->fecha_nacimiento = $request->fecha_nacimiento;
        $personaNatural->genero = $request->genero;
        $personaNatural->save();


        $data=[
            'message' => 'Se ha creado con exito',
            'persona' => $persona,
            'personaNatural' => $personaNatural

        ];
        return response()->json($data);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        return response()->json($persona);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        $persona = new Persona;
        $personaNatural = new PersonaNatural;

        $persona->nombre = $request->nombre;
        $persona->telefono = $request->telefono;
        $persona->correo = $request->correo;
        $persona->foto = $request->foto;#reparar
        $persona->save();

        $personaNatural->id_persona = $persona->id;
        $personaNatural->apellido = $request->apellido;
        $personaNatural->cedula = $request->cedula;
        $personaNatural->fecha_nacimiento = $request->fecha_nacimiento;
        $personaNatural->genero = $request->genero;
        $personaNatural->save();
        $data=[
            'message' => 'Se ha actualizado con exito',
            'persona' => $persona,
            'personaNatural' => $personaNatural
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona,PersonaNatural $personaNatural)
    {
        $persona->delete();
        $personaNatural->delete();
        $data=[
            'message' => 'Se ha borrado con exito',
            'persona' => $persona,
            'personaNatural' => $personaNatural
        ];
        return response()->json($data);
    }
}

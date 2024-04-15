<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $personas=Persona::all();
        return view('persona.index')->with('personas',$personas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $persona= new Persona();
        $persona->codPersona=$request->get('codPersona');
        $persona->Nombre=$request->get('Nombre');
        $persona->Apellido=$request->get('Apellido');
        $persona->ciudad=$request->get('ciudad');
        $persona->cumpleaños=$request->get('cumpleaños');
        $persona->save();
        return redirect('/persona');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $personas=Persona::all();
        
        return view('persona.index2')->with('personas',$personas);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $editarPersona=Persona::find($id);

        return view('persona.edit')->with('editarPersona',$editarPersona);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $editarPersona=Persona::find($id);        
        $editarPersona->Nombre=$request->get('Nombre');
        $editarPersona->Apellido=$request->get('Apellido');
        $editarPersona->ciudad=$request->get('ciudad');
        $editarPersona->cumpleaños=$request->get('cumpleaños');
        $editarPersona->save();
        return redirect('persona');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarPersona=Persona::find($id);
        $eliminarPersona->delete();
        return redirect('persona');
    }
}

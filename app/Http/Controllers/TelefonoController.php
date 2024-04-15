<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Telefono;
class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //
        return view('telefono.create')->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $telefono=new Telefono();
        $telefono->codTelefono=$request->get('codTelefono');
        $telefono->telefono=$request->get('telefono');
        $telefono->codPersona=$request->get('codPersona');
        $telefono->save();
        return redirect('/persona');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
        $persona=Persona::find($id);       
        $telefonos=Telefono::all();
        return view('telefono.index2')->with('telefonos',$telefonos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

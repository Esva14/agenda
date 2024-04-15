<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Email;
class EmailController extends Controller
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
        return view('correo.create')->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $correo=new Email();
        $correo->codEmail=$request->get('codEmail');
        $correo->email=$request->get('email');
        $correo->codPersona=$request->get('codPersona');
        $correo->save();
        return redirect('/persona');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $persona=Persona::find($id);       
        $correos=Email::all();
        return view('correo.index2')->with('correos',$correos);
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

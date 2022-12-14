<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//Función que muesta una lista de doctores
    {
        $doctors = Doctor::all();
        return response()->json($doctors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//Función que crea un nuevo doctor 
    {
        $doctor = new Doctor;
        $doctor->dui = $request->dui;
        $doctor->name = $request->name;
        $doctor->password = $request->password;
        $doctor->idRoll = $request->idRoll;
        $doctor->specialty = $request->specialty;
        return response()->json($doctor);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//Función que muestra un doctor en espefico basandose en su id
    {
        $doctor = Doctor::findOrFail($id);
        return response()->json($doctor);
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
    public function update(Request $request, $id)//Función que actualiza datos de un doctor basandose en su id
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->dui = $request->dui;
        $doctor->name = $request->name;
        $doctor->password = $request->password;
        $doctor->idRoll = $request->idRoll;
        $doctor->specialty = $request->specialty;
        $doctor->save();
        return response()->json($doctor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//Función que elimina un doctor basandose en su id
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return response()->noContent();
    }
}

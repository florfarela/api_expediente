<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//Función que muesta una lista de los pacientes
    {
        $patients = Patient::all();
        return response()->json($patients);
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
    public function store(Request $request)//Funcion que crea un paciente
    {
        $patient = new Patient;
        $patient->dui = $request->dui;
        $patient->age = $request->age;
        $patient->name = $request->name;
        $patient->direction = $request->direction;
        $patient->idArea = $request->idArea;
        $patient->diagnostic = $request->diagnostic;
        $patient->observation = $request->observation;
        $patient->stateResident = $request->stateResident;
        $patient->password = $request->password;
        $patient->idDoctor = $request->idDoctor;
        $patient->idRoll = $request->idRoll;
        $patient->save();
        return response()->json($patient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//Funcion que muestra un paciente basandose en su id
    {
        $patient = Patient::findOrFail($id);
        return response()->json($patient);
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
    public function update(Request $request, $id)//Funcion que actualiza un paciente basandose en su id
    {
        $patient = Patient::findOrFail($id);
        $patient->dui = $request->dui;
        $patient->age = $request->age;
        $patient->name = $request->name;
        $patient->direction = $request->direction;
        $patient->idArea = $request->idArea;
        $patient->diagnostic = $request->diagnostic;
        $patient->observation = $request->observation;
        $patient->stateResident = $request->stateResident;
        $patient->password = $request->password;
        $patient->idDoctor = $request->idDoctor;
        $patient->idRoll = $request->idRoll;
        $patient->save();
        return response()->json($patient);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//Funcion que elimina un paciente basandose en su id
    {
     $patient = Patient::findOrFail($id);
     $patient->delete();
     return response()->noContent();   
    }
}

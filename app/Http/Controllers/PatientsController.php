<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientsController extends Controller
{
    //Función que muesta una lista de los pacientes
    public function index()
    {
        $patients = Patient::all();
        return response()->json($patients);
    }
    //Funcion que crea un paciente
    public function store(Request $request)
    {
        $patient = new Patient;
        
        $patient->dui = $request->dui;
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->adress = $request->adress;
        $patient->phone = $request->phone;
        $patient->diagnosis = $request->diagnosis;
        $patient->admitted = $request->admitted;
        $patient->idArea = $request->idArea;
        $patient->observations = $request->observations;
        $patient->severity = $request->severity;
        $patient->idDoctor = $request->idDoctor;
        $patient->idRoles = $request->idRoles;
        $patient->password = $request->password;
        
        $patient->save();
        return response()->json($patient);
    }

    //Funcion que muestra un paciente basandose en su id
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return response()->json($patient);
    }
    //Funcion que actualiza un paciente basandose en su id
    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $patient->dui = $request->dui;
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->adress = $request->adress;
        $patient->phone = $request->phone;
        $patient->diagnosis = $request->diagnosis;
        $patient->admitted = $request->admitted;
        $patient->idArea = $request->idArea;
        $patient->observations = $request->observations;
        $patient->severity = $request->severity;
        $patient->idDoctor = $request->idDoctor;
        $patient->idRoles = $request->idRoles;
        $patient->password = $request->password;
        
       
        $patient->save();
        return response()->json($patient);
    }

   //Funcion que elimina un paciente basandose en su id
    public function destroy($id)
    {
     $patient = Patient::findOrFail($id);
     $patient->delete();
     return response()->noContent();   
    }
}

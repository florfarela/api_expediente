<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorsController extends Controller
{
    //Función que muesta una lista de doctores
    //get...
    public function index()
    {
        $doctor = Doctor::all();
        return response()->json($doctor);
    }

   //Función que crea un nuevo doctor 
   //post...
    public function store(Request $request)
    {
        $doctor = new Doctor;
        $doctor->dui = $request->dui;
        $doctor->name = $request->name;
        $doctor->specialty = $request->specialty;
        $doctor->idRoll = $request->idRoll;
        $doctor->password = $request->password;
        
        
        return response()->json($doctor);
    }

    //Función que muestra un doctor en espefico basandose en su id
    //get
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return response()->json($doctor);
    }

    //Función que actualiza datos de un doctor basandose en su id
    //put....
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->dui = $request->dui;
        $doctor->name = $request->name;
        $doctor->specialty = $request->specialty;
        $doctor->idRoles = $request->idRoles;
        $doctor->password = $request->password;
        $doctor->save();
        return response()->json($doctor);
    }

    //Función que elimina un doctor basandose en su id
    //delete......
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return response()->noContent();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receptionist;

class ReceptionistController extends Controller
{
    //Funcion que muestra una lista de recepcionistas
    public function index()
    {
        $receptionists = Receptionist::all();
        return response()->json($receptionists);
    }

  //Funcion que crea una recepcionista
    public function store(Request $request)
    {
        $receptionist = new Receptionist;
        $receptionist->dui = $request->dui;
        $receptionist->age = $request->age;
        $receptionist->name = $request->name;
        $receptionist->adress = $request->adress;
        $receptionist->idArea = $request->idArea;//FK
        $receptionist->idRoles = $request->idRoles;//FK
        $receptionist->password = $request->password;
        $receptionist->save();
        return response()->json($receptionist);
    }

    
    //Funcion que muestra una recepcionista basandose en su id
    public function show($id)
    {
        $receptionist = Receptionist::findOrFail($id);
        return response()->json($receptionist);
    }

//Funcion que actualiza datos una recepcionista basandose en su id
    public function update(Request $request, $id)
    {
        $receptionist = Receptionist::findOrFail($id);
        $receptionist->dui = $request->dui;
        $receptionist->age = $request->age;
        $receptionist->name = $request->name;
        $receptionist->adress = $request->adress;
        $receptionist->idArea = $request->idArea;
        $receptionist->idRoles = $request->idRoles;
        $receptionist->password = $request->password;
        $receptionist->save();
        return response()->json($receptionist);
    }

   //Funcion que elimina una recepcionista basandose en su id
    public function destroy($id)
    {
        $receptionist = Receptionist::findOrFail($id);
        $receptionist->delete();
        return response()->noContent();
    }
}

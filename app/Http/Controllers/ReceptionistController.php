<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receptionist;

class ReceptionistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//Funcion que muestra una lista de recepcionistas
    {
        $receptionists = Receptionist::all();
        return response()->json($$receptionists);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//Funcion que crea una recepcionista
    {
        $receptionist = new Receptionist;
        $receptionist->dui = $request->dui;
        $receptionist->age = $request->age;
        $receptionist->name = $request->name;
        $receptionist->direction = $request->direction;
        $receptionist->idArea = $request->idArea;//FK
        $receptionist->password = $request->password;
        $receptionist->idRoll = $request->idRoll;//FK
        $receptionist->save();
        return response()->json($receptionist);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//Funcion que muestra una recepcionista basandose en su id
    {
        $receptionist = Receptionist::findOrFail($id);
        return response()->json($receptionist);
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
    public function update(Request $request, $id)//Funcion que actualiza datos una recepcionista basandose en su id
    {
        $receptionist = Receptionist::findOrFail($id);
        $receptionist->dui = $request->dui;
        $receptionist->age = $request->age;
        $receptionist->name = $request->name;
        $receptionist->direction = $request->direction;
        $receptionist->idArea = $request->idArea;
        $receptionist->password = $request->password;
        $receptionist->idRoll = $request->idRoll;
        $receptionist->save();
        return response()->json($receptionist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//Funcion que elimina una recepcionista basandose en su id
    {
        $receptionist = Receptionist::findOrFail($id);
        $receptionist->delete();
        return response()->noContent();
    }
}

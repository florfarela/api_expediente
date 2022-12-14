<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Funcion que mostrara una lista de areas.
    {
        $areas = Area::all();
        return response()->json($areas); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Funcion que creara un area nueva.
    {
        $area = new Area;
        $area->name = $request->name;
        $area->description = $request->description;
        $area->save();
        return response()->json($area); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //Función que muestra un area en espefico basandose en su id
    {
        $area = Area::findOrFail($id);
        return response()->json($area);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//Función que actualiza datos de un area basandose en su id
    {
        $area = Area::findOrFail($id);
        $area->name = $request->name;
        $area->description = $request->description;
        $area->save();
        return response()->json($area);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//Función que elimina un area basandose en su id
    {
        $area = Area::findOrFail($id);
        $area->delete();
        return response()->noContent();
    }
}

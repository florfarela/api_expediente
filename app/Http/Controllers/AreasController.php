<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreasController extends Controller
{
    //Funcion que mostrara una lista de areas.
    public function index() 
    {
        $areas = Area::all();
        return response()->json($areas); 
    }

   //Funcion que creara un area nueva
    public function store(Request $request) 
    {
        $area = new Area;
        $area->name = $request->name;
        $area->description = $request->description;
        $area->save();
        return response()->json($area); 
    }

    //Función que muestra un area en espefico basandose en su id
    public function show($id) 
    {
        $area = Area::findOrFail($id);
        return response()->json($area);
    }

   //Función que actualiza datos de un area basandose en su id
    public function update(Request $request, $id)
    {
        $area = Area::findOrFail($id);
        $area->name = $request->name;
        $area->description = $request->description;
        $area->save();
        return response()->json($area);
    }

    //Función que elimina un area basandose en su id
    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();
        return response()->noContent();
    }
}

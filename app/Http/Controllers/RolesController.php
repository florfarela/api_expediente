<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RolesController extends Controller
{
    //Funcion que muestra una lista de Roles
    public function index() 
    {
        $role = Role::all();
        return response()->json($role);
    }


   //Funcion que crea un rol
    public function store(Request $request) 
    {
        $role = new Role;
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();
        return response()->json($role);
    }

   //Funcion que muestra un rol basandose en su id
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return response()->json($role);
    }


    //Funcion que actualiza un rol basandose en su id
    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();
        return response()->json($role);
    }

    //Funcion que elimina un rol basandose en su id
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return response()->noContent();
    }
}

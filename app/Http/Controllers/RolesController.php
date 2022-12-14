<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Funcion que muestra una lista de Roles
    {
        $roles = Role::all();
        return response()->json($roles);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Funcion que crea un rol
    {
        $role = new Role;
        $role->name = $request->name;
        $role->save();
        return response()->json($role);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//Funcion que muestra un rol basandose en su id
    {
        $role = Role::findOrFail($id);
        return response()->json($role);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//Funcion que actualiza un rol basandose en su id
    {
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->save();
        return response()->json($role);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//Funcion que elimina un rol basandose en su id
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return response()->noContent();
    }
}

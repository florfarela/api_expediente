<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Listing the roles
    public function index()
    {
        $roleIndex = Role::all();   //creacion del get all
        return $roleIndex;
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
    //Creating a new role
    public function store(Request $request)
    {
        $roleStore=new Role();
        $roleStore->roleName=$roleStore->roleName;
        $roleStore->roleDescription=$roleStore->roleDescription;
        $roleStore->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roleShow= Role::find($id);
        return $roleShow;
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
    //Updating a role
    public function update(Request $request, $id)
    {
        $roleUpdate=Role::findOrFail($id);
        $roleUpdate->roleName=$roleUpdate->roleName;
        $roleUpdate->roleDescription=$roleUpdate->roleDescription;
        $roleUpdate->save();
        return $roleUpdate;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Deleting a role
    public function destroy($id)
    {
        $roleDestroy=Role::destroy($id);
        return $roleDestroy;
    }
}

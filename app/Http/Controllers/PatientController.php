<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;  //Agregamos el modelo pacient a los controlers

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patiens = Patient::all();
        return $patiens;
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
    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->dui = $request->dui;
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->adress = $request->adress;
        $patient->phone = $request->phone;
        $patient->diagnosis = $request->diagnosis;
        $patient->admitted = $request->admitted;
        $patient->area = $request->area;
        $patient->observations = $request->observations;
        $patient->severity = $request->severity;
        $patient->doctor = $request->doctor;

        $patient->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @param  int  $dui    
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dui)
    {
        $patient = Patient::findOrFail($request->dui);
        $patient->dui = $request->dui;
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->adress = $request->adress;
        $patient->phone = $request->phone;
        $patient->diagnosis = $request->diagnosis;
        $patient->admitted = $request->admitted;
        $patient->area = $request->area;
        $patient->observations = $request->observations;
        $patient->severity = $request->severity;
        $patient->doctor = $request->doctor;

        $patient->save();

        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dui)
    {
        $patient = Patient::destroy($dui);
        return $patient;
    }
}

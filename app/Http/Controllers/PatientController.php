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
        $patienShow = Patient::all();
        return $patienShow;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patientStore = new Patient();
        $patientStore->dui = $request->dui;
        $patientStore->name = $request->name;
        $patientStore->age = $request->age;
        $patientStore->adress = $request->adress;
        $patientStore->phone = $request->phone;
        $patientStore->diagnosis = $request->diagnosis;
        $patientStore->admitted = $request->admitted;
        $patientStore->area = $request->area;
        $patientStore->observations = $request->observations;
        $patientStore->severity = $request->severity;
        $patientStore->doctor = $request->doctor;

        $patientStore->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patientId = Patient::find($id);
        return $patientId;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $dui    
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $patientUpDate = Patient::findOrFail($id);
        $patientUpDate->dui = $request->dui;
        $patientUpDate->name = $request->name;
        $patientUpDate->age = $request->age;
        $patientUpDate->adress = $request->adress;
        $patientUpDate->phone = $request->phone;
        $patientUpDate->diagnosis = $request->diagnosis;
        $patientUpDate->admitted = $request->admitted;
        $patientUpDate->area = $request->area;
        $patientUpDate->observations = $request->observations;
        $patientUpDate->severity = $request->severity;
        $patientUpDate->doctor = $request->doctor;

        $patientUpDate->save();
         return $patientUpDate;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patientDelete = Patient::destroy($id);
        return $patientDelete;
    }
}

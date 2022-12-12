<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;  //Agregamos el controlador para el paciente

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas de Laravel 9
Route::get('/patientShow',[PatientController::class,'index']); //Mostramos todos los datos
Route::post('/patientStore',[PatientController::class,'store']); //Crear un nuevo paciente
Route::get('/patientId/{id}',[PatientController::class,'show']);//mostrar por id
Route::put('/patientUpDate/{id}',[PatientController::class,'update']); // Actualizamos el paciente
Route::delete('/patientDelete/{id}',[PatientController::class,'destroy']); //Eliminamos el paciente

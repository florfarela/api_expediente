<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;  //Agregamos el controlador para el paciente
use App\Http\Controllers\LoginController; //Adding the login controller
use App\Http\Controllers\RoleController; //Adding the role Controller

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
//Rutas de Laravel 9
Route::get('/patientShow',[PatientController::class,'index']); //Mostramos todos los datos
Route::post('/patientStore',[PatientController::class,'store']); //Crear un nuevo paciente
Route::get('/patientId/{id}',[PatientController::class,'show']);//mostrar por id
Route::put('/patientUpDate/{id}',[PatientController::class,'update']); // Actualizamos el paciente
Route::delete('/patientDelete/{id}',[PatientController::class,'destroy']); //Eliminamos el paciente

//Login
Route::get('/Login', [LoginController::class, 'index']);
Route::post('/LoginStore', [LoginController::class, 'store']);

//Role routes
Route::get('/RoleIndex', [RoleController::class,'index']); //Showing all data about role
Route::post('/RoleStore', [RoleController::class,'store']); //creating a new role
Route::get('/RoleShow/{id}', [RoleController::class,'show']); //showing a role
Route::put('/RoleUpdate/{id}', [RoleController::class,'update']); //updating a role
Route::delete('/RoleDestroy/{id}', [RoleController::class,'destroy']); //deleting a role
//Keep you in geek mode my friend!
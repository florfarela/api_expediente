<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreasController; 
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\RolesController;  

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

Route::apiResource('/areas', AreasController::class);// Rutas para las areas
Route::apiResource('/doctors', DoctorsController::class);// Rutas para las Doctores
Route::apiResource('/patients', PatientsController::class);// Rutas para las Pacientes
Route::apiResource('/receptionist', ReceptionistController::class);// Rutas para las Recepcionistas
Route::apiResource('/roles', RolesController::class);// Rutas para las Roles
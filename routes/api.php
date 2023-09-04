<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\LocataireController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\IntermediaireController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ChargeFixesController;
use App\Http\Controllers\ReglementController;
use App\Http\Controllers\SupplementsController;

// Authentication routes
Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/logout', [AuthenticationController::class, 'logout']);

// Locataire routes
Route::get('/locataires', [LocataireController::class, 'index']);
Route::get('/locataires/{id}', [LocataireController::class, 'show']);
Route::post('/locataires', [LocataireController::class, 'store']);
Route::put('/locataires/{id}', [LocataireController::class, 'update']);
Route::delete('/locataires/{id}', [LocataireController::class, 'destroy']);

// Fournisseur routes
Route::get('/fournisseurs', [FournisseurController::class, 'index']);
Route::get('/fournisseurs/{id}', [FournisseurController::class, 'show']);
Route::post('/fournisseurs', [FournisseurController::class, 'store']);
Route::put('/fournisseurs/{id}', [FournisseurController::class, 'update']);
Route::delete('/fournisseurs/{id}', [FournisseurController::class, 'destroy']);

// Intermediaire routes
Route::get('/intermediaires', [IntermediaireController::class, 'index']);
Route::get('/intermediaires/{id}', [IntermediaireController::class, 'show']);
Route::post('/intermediaires', [IntermediaireController::class, 'store']);
Route::put('/intermediaires/{id}', [IntermediaireController::class, 'update']);
Route::delete('/intermediaires/{id}', [IntermediaireController::class, 'destroy']);

// Contrat routes
Route::get('/contrats', [ContratController::class, 'index']);
Route::get('/contrats/{id}', [ContratController::class, 'show']);
Route::post('/contrats', [ContratController::class, 'store']);
Route::put('/contrats/{id}', [ContratController::class, 'update']);
Route::delete('/contrats/{id}', [ContratController::class, 'destroy']);

// Reservation routes
Route::get('/reservations', [ReservationController::class, 'index']);
Route::get('/reservations/{id}', [ReservationController::class, 'show']);
Route::post('/reservations', [ReservationController::class, 'store']);
Route::put('/reservations/{id}', [ReservationController::class, 'update']);
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);

// Charge Fixes routes
Route::get('/charge-fixes', [ChargeFixesController::class, 'index']);
Route::get('/charge-fixes/{id}', [ChargeFixesController::class, 'show']);
Route::post('/charge-fixes', [ChargeFixesController::class, 'store']);
Route::put('/charge-fixes/{id}', [ChargeFixesController::class, 'update']);
Route::delete('/charge-fixes/{id}', [ChargeFixesController::class, 'destroy']);

// Supplements routes
Route::get('/supplements', [SupplementsController::class, 'index']);
Route::get('/supplements/{id}', [SupplementsController::class, 'show']);
Route::post('/supplements', [SupplementsController::class, 'store']);
Route::put('/supplements/{id}', [SupplementsController::class, 'update']);
Route::delete('/supplements/{id}', [SupplementsController::class, 'destroy']);

// Regelements routes
Route::get('/reglements', [ReglementController::class, 'index']);
Route::get('/reglements/{id}', [ReglementController::class, 'show']);
Route::post('/reglements', [ReglementController::class, 'store']);
Route::put('/reglements/{id}', [ReglementController::class, 'update']);
Route::delete('/reglements/{id}', [ReglementController::class, 'destroy']);

// Vehicules routes
Route::get('/vehicules', [VehiculeController::class, 'index']);
Route::get('/vehicules/{id}', [VehiculeController::class, 'show']);
Route::post('/vehicules', [VehiculeController::class, 'store']);
Route::put('/vehicules/{id}', [VehiculeController::class, 'update']);
Route::delete('/vehicules/{id}', [VehiculeController::class, 'destroy']);

// Marque_Vehicule routes
Route::get('/marque_vehicule', [MarqueVehiculeController::class, 'index']);
Route::get('/marque_vehicule/{id}', [MarqueVehiculeController::class, 'show']);
Route::post('/marque_vehicule', [MarqueVehiculeController::class, 'store']);
Route::put('/marque_vehicule/{id}', [MarqueVehiculeController::class, 'update']);
Route::delete('/marque_vehicule/{id}', [MarqueVehiculeController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

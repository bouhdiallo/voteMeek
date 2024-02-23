<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ElecteurController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('dashboard', DashboardController::class)->name('dashboard');


//inscription et connexioon
Route::get('/inscription/Electeur', [ElecteurController::class, 'create']);
Route::post('/enregistrer/electeur', [ElecteurController::class, 'inscriptionElecteur'])->name('enregistrer.electeur');
// Route::post('/enregistrer/electeur', [ElecteurController::class, 'inscriptionElecteur'])->name('enregistrer.electeur');
Route::get('login', [AuthController::class, 'create'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');







Route::get('/ajouter/Candidat', [CandidatController::class, 'index']);
Route::get('/liste/Candidat', [CandidatController::class, 'liste']);
Route::post('/Enregistrer/Candidat', [CandidatController::class, 'store'])->name('store.candidat');



Route::get('/ajouter/vote', [ElecteurController::class, 'index']);
// Route::get('/liste/Candidat', [CandidatController::class, 'liste']);
 Route::post('/Enregistrer/vote', [CandidatController::class, 'voter'])->name('store.vote');

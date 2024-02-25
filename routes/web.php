<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Etudiantcontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/delete-etudiant/{id}', [Etudiantcontroller::class, 'delete_etudiant']);
Route::get('/update-etudiant/{id}', [Etudiantcontroller::class, 'update_etudiant']);
Route::get('/update/traitement', [Etudiantcontroller::class, 'update_etudiant_traitement']);
Route::get('/etudiant', [Etudiantcontroller::class, 'liste_etudiant']);
Route::get('/ajouter', [Etudiantcontroller::class, 'ajouter_etudiant']);
Route::get('/ajouter/traitement', [Etudiantcontroller::class, 'ajouter_etudiant_traitement']);
Route::get('/accueil', [Etudiantcontroller::class, 'accueil_etudiant']);
Route::get('/login', [Etudiantcontroller::class, 'login_etudiant']);

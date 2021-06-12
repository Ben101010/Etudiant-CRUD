<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('accueil');


/*Route::get('/fetudiant', function () {
    return view('etudiant');
})->name('li_etudiant');*/

Route::get('/etudiant', [EtudiantController::class, 'index'])->name('list_etudiant');
Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('list_etudiant.create');

Route::post('/etudiant/ajouter', [EtudiantController::class, 'ajouter'])->name('list_etudiant.ajouter');
Route::delete('/etudiant/{etudiant}', [EtudiantController::class, 'delete'])->name('list_etudiant.supprimer');


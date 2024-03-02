<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FiltreAnnuelController;
use App\Http\Controllers\CourrierController;
use App\Http\Controllers\AddCourrierController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'choixdirection'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/filtre_annuel/{id}', [FiltreAnnuelController::class, 'annee'])->name('filtre_annuel');

Route::get('/courrier/{id}', [CourrierController::class, 'affichagecourrier'])->name('courrier');
Route::get('/courrier/modifycourrier/{id}', [CourrierController::class, 'modifycourrier'])->name('modifycourrier');
Route::post('/updatecourrier', [CourrierController::class, 'updatecourrier'])->name('updatecourrier');
Route::get('/courrier/deletecourrier/{id}', [CourrierController::class, 'deletecourrier'])->name('deletecourrier');


Route::get('/addcourrier', [AddCourrierController::class, 'addcourrier'])->name('addcourrier');
Route::post('/addcourrier', [AddCourrierController::class, 'savecourrier'])->name('savecourrier');



require __DIR__.'/auth.php';

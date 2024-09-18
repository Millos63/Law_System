<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('judgeds', App\Http\Controllers\JudgedController::class)->middleware('auth');
Route::resource('clients', App\Http\Controllers\ClientController::class)->middleware('auth');
Route::resource('judments', App\Http\Controllers\JudmentController::class)->middleware('auth');
Route::resource('tasks', App\Http\Controllers\TaskController::class)->middleware('auth');
Route::resource('expedients', App\Http\Controllers\ExpedientController::class)->middleware('auth');
Route::resource('observations', App\Http\Controllers\ObservationController::class)->middleware('auth');
Route::resource('promotions-accords', App\Http\Controllers\PromotionsAccordController::class)->middleware('auth');
Route::resource('expedient-files', App\Http\Controllers\ExpedientFileController::class)->middleware('auth');
Route::resource('pieces', App\Http\Controllers\PieceController::class)->middleware('auth');
Route::resource('pieces-promotions-accords', App\Http\Controllers\PiecesPromotionsAccordController::class)->middleware('auth');
Route::resource('pieces-files', App\Http\Controllers\PiecesFileController::class)->middleware('auth');
Route::resource('matters', App\Http\Controllers\MatterController::class)->middleware('auth');

//Ruta para mostrar la información del cliente en el create al seleccionar un cliente ya creado
Route::get('/clients/{clientId}', [ClientController::class, 'show'])->name('clients.show');

//Para pasarle a mi index el id_expedient
Route::get('expedients/{id_expedient}/promotions-accords', [App\Http\Controllers\PromotionsAccordController::class, 'index'])->name('promotions-accords.index');


Route::get('expedients/{id_expedient}/promotions-accords/create', [App\Http\Controllers\PromotionsAccordController::class, 'create'])->name('promotions-accords.create');

//Formulario donde meteremos todo
Route::resource('expedients-all', App\Http\Controllers\ExpedientAllController::class)->middleware('auth');



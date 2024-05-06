<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InsertionController;
use Illuminate\Support\Facades\Auth;

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


//HOME 
Route::get('/',[PageController::class,'home'])->name('home');


//zona annunci
//Route::resource('/insertion',InsertionController::class);
Route::get('/insertion/create', [InsertionController::class, 'create'])->middleware('auth')->name('insertion.create');
Route::get('/insertion/{insertion}', [InsertionController::class, 'show'])->name('insertion.show');
Route::get('/insertions/{insertion}', [InsertionController::class, 'show'])->name('insertions.show');
Route::get('/insertions', [InsertionController::class, 'index'])->name('insertions.index');




//zona categorie
Route::get('categories/{category}', [CategoryController::class, 'showInsertions'])->name('categories.showInsertions');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');



//home revisore
Route::get('/revisor/home',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');

//accetta annuncio
Route::patch('/accetta/annuncio/{insertion}',[RevisorController::class,'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

//rifiuta annuncio
Route::patch('/rifiuta/annuncio/{insertion}',[RevisorController::class,'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

//annulla ultima modifica
Route::patch('/annulla/annuncio/{insertion}',[RevisorController::class,'undoChanges'])->middleware('isRevisor')->name('revisor.undoChanges');

// richiesta per diventare un revisore
Route::get('/richiesta/revisore', [RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');

//rendi un utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class,'makeRevisor'])->name('make.revisor');


//ricerca annuncio
Route::get('/ricerca/annuncio',[Pagecontroller::class,'searchAnnuncements'])->name('announcements.search');

//selezione lingua sito
Route::post('/lingua/{lang}', [PageController::class, 'setLanguage'])->name('set_language_locale');






















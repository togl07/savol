<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;
use App\Http\Controllers\sorting;
use App\Http\Controllers\competitionController;

Route::get('/',[main::class,'asosiy']);
Route::get('/about',[main::class,'about']);
Route::get('/competitions',[main::class,'comps']);
Route::get('/competitions/{id}',[competitionController::class,"problematic"]);

Route::get('/signup',[main::class,"signup"]);
Route::post('/signup/create',[main::class,"createuser"]);
Route::get('/data',[main::class,"data"]);
Route::get('/profil',[sorting::class,"sorting"]);
Route::get('/login',[sorting::class,"login"]);
Route::post('/login/enter',[sorting::class,"enter"]);
Route::get('/login',[sorting::class,"login"]);
Route::get('/judge',[competitionController::class,"olimps"]);
Route::post('competitions/generate', [competitionController::class, 'create'])->name('competitions.generate');
Route::post('/added',[competitionController::class,"added"]);
Route::get('competition/add', [competitionController::class, 'judge']);
Route::get('/competitions/{id}/{add}',[competitionController::class,"add_problematic"]);
Route::post('/competitions/{id}/{add}/addedsuccessfuly',[competitionController::class,"success"]);
Route::get('/competition/{id}',[competitionController::class,"competitionid"]);

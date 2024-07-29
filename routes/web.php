<?php

use App\Http\Controllers\eventController;
use Illuminate\Support\Facades\Route;

Route::get('/',[eventController::class,"home"])->name("home");

Route::get('/dashboard', [eventController::class,"index"])->name("event");
Route::delete('/destroy/{id}', [eventController::class,"destroy"])->name("event.destroy");

Route::get('/addEvent', [eventController::class,"create"])->name("event.create");
Route::post('/storeEvent', [eventController::class,"store"])->name("event.store");
Route::get('/events', [eventController::class,"events"])->name("events");
Route::get('/showdetail/{id}',[eventController::class,"show"])->name("event.detail");

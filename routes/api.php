<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\lectorController;

Route::get("/lectores", [lectorController::class, 'get']);

Route::get("/lector/{id}", [lectorController::class, 'getById']);

Route::post("/lector", [lectorController::class, 'create']);

Route::patch("/lector/{id}", [lectorController::class, 'update']);

Route::delete("/lector/{id}", [lectorController::class, 'delete']);
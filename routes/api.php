<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LectorController;

Route::get("/lectores", [LectorController::class, 'index']);

Route::get("/lector/{id}", [LectorController::class, 'show']);

Route::post("/lector", [LectorController::class, 'store']);

Route::patch("/lector/{id}", [LectorController::class, 'update']);

Route::delete("/lector/{id}", [LectorController::class, 'destroy']);
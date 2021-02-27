<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/', [SiteController::class, 'inicio']);
Route::get('/inicio', [SiteController::class, 'inicio']);
Route::get('/horario', [SiteController::class, 'horario']);
Route::get('/produtos', [SiteController::class, 'produtos']);



    

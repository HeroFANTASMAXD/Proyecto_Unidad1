<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('inicio'))->name('inicio');
Route::get('/Agentes', fn () => view('agentes'))->name('agentes');
Route::get('/Menu', fn () => view('menu'))->name('menu');
Route::get('/Soporte', fn () => view('soporte'))->name('soporte');
?>
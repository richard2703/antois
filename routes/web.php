<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('home'); // Carga la vista Vue 'Home.vue'
});

Route::get('/tipo-estudios/{nombre}', function ($nombre) {
    return Inertia::render('estudios-disponibles', ['nombre' => $nombre]);
})->name('tipo-estudios');

Route::get('/estudio/{nombre}', function ($nombre) {
    return Inertia::render('EstudioDetalle', ['nombre' => $nombre]);
})->name('estudio.detalle');

<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('home'); // Carga la vista Vue 'Home.vue'
});

Route::get('/estudios-disponibles', function () {
    return Inertia::render('estudios-disponibles');
})->name('estudios-disponibles');

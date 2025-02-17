<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('App'); // Carga la vista Vue 'Home.vue'
});

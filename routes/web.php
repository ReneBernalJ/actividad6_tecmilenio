<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Ruta para Universos
Route::get('/universes', function () {
    $data = DB::table('universes')->get();
    return view('universes', ['universes' => $data]);
});

// Ruta para Superhéroes (tu tabla 'characters')
Route::get('/superheroes', function () {
    $data = DB::table('characters')->get();
    return view('superheroes', ['superheroes' => $data]);
});

// Ruta para Superpoderes
Route::get('/superpowers', function () {
    $data = DB::table('superpowers')->get();
    return view('superpowers', ['superpowers' => $data]);
});
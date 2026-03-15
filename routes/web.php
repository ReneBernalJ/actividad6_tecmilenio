<?php

// TODOS LOS "USE" VAN HASTA ARRIBA
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Universe;
use App\Models\Superhero;
use App\Http\Controllers\SuperheroController; // ESTA ES LA LÍNEA NUEVA

// Tus rutas anteriores
Route::get('/universes', function () {
    $data = DB::table('universes')->get();
    return view('universes', ['universes' => $data]);
});

Route::get('/superheroes', function () {
    $data = DB::table('characters')->get();
    return view('superheroes', ['superheroes' => $data]);
});

Route::get('/superpowers', function () {
    $data = DB::table('superpowers')->get();
    return view('superpowers', ['superpowers' => $data]);
});

// --- RUTAS DE LA ACTIVIDAD 7 ---

// Ruta 1: Universo (Create, Update, Read con relación)
Route::get('/actividad-universo', function () {
    // 1. Create (Crear)
    $universo = Universe::create(['name' => 'Universo de Prueba']);
    
    // 2. Update (Actualizar)
    $universo->update(['name' => 'Universo Marvel Editado']);
    
    // 3. Read (Leer y mostrar con la relación)
    return Universe::with('superheroes')->get();
});

// Ruta 2: Superhéroes (Create, Update, Read con relación)
Route::get('/actividad-superheroe', function () {
    // Aseguramos que exista un universo al cual asignarlo
    $universo = Universe::firstOrCreate(['name' => 'Marvel']);

    // 1. Create (Crear)
    $heroe = Superhero::create(['name' => 'Spiderman', 'universe_id' => $universo->id]);
    
    // 2. Update (Actualizar)
    $heroe->update(['name' => 'Spiderman Editado']);
    
    // 3. Read (Leer y mostrar con la relación)
    return Superhero::with('universe')->get();
});

// --- RUTAS DE LA ACTIVIDAD 8 ---
Route::get('/mis-superheroes', [SuperheroController::class, 'index'])->name('superheroes.index');
Route::get('/mis-superheroes/crear', [SuperheroController::class, 'create'])->name('superheroes.create');
Route::post('/mis-superheroes/guardar', [SuperheroController::class, 'store'])->name('superheroes.store');
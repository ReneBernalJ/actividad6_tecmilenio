<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use App\Models\Universe;

class SuperheroController extends Controller
{
    // 1. INDEX: Muestra la lista de todos los superhéroes
    public function index()
    {
        // Traemos todos los superhéroes junto con su universo
        $superheroes = Superhero::with('universe')->get();
        
        // Los mandamos a una página web (vista) que vamos a crear en el siguiente paso
        return view('superheroes_act8.index', compact('superheroes'));
    }

    // 2. CREATE: Muestra el formulario web para crear un superhéroe
    public function create()
    {
        // Traemos los universos para que puedas elegir uno en el formulario
        $universes = Universe::all(); 
        
        return view('superheroes_act8.create', compact('universes'));
    }

    // 3. STORE: Toma los datos del formulario y los guarda en la base de datos
    public function store(Request $request)
    {
        // Validamos que no envíen el formulario en blanco
        $request->validate([
            'name' => 'required|string|max:255',
            'universe_id' => 'required|exists:universes,id'
        ]);

        // Creamos al superhéroe
        Superhero::create([
            'name' => $request->name,
            'universe_id' => $request->universe_id
        ]);

        // Lo regresamos a la pantalla de la lista
        return redirect()->route('superheroes.index');
    }
}
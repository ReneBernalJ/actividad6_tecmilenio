<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index() {
        $superheroes = Superhero::with('universe')->get();
        return view('superheroes_crud.index', compact('superheroes'));
    }

    public function create() {
        $universes = Universe::all();
        return view('superheroes_crud.create', compact('universes'));
    }

    public function store(Request $request) {
        $request->validate(['name' => 'required', 'universe_id' => 'required']);
        Superhero::create($request->all());
        return redirect()->route('superheroes_crud.index');
    }

    public function show($id) {
        $superhero = Superhero::findOrFail($id);
        return view('superheroes_crud.show', compact('superhero'));
    }

    public function edit($id) {
        $superhero = Superhero::findOrFail($id);
        $universes = Universe::all();
        return view('superheroes_crud.edit', compact('superhero', 'universes'));
    }

    public function update(Request $request, $id) {
        $request->validate(['name' => 'required', 'universe_id' => 'required']);
        $superhero = Superhero::findOrFail($id);
        $superhero->update($request->all());
        return redirect()->route('superheroes_crud.index');
    }

    public function destroy($id) {
        $superhero = Superhero::findOrFail($id);
        $superhero->delete();
        return redirect()->route('superheroes_crud.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index() {
        $universes = Universe::all();
        return view('universes_crud.index', compact('universes'));
    }

    public function create() {
        return view('universes_crud.create');
    }

    public function store(Request $request) {
        $request->validate(['name' => 'required']);
        Universe::create($request->all());
        return redirect()->route('universes_crud.index');
    }

    public function show($id) {
        $universe = Universe::findOrFail($id);
        return view('universes_crud.show', compact('universe'));
    }

    public function edit($id) {
        $universe = Universe::findOrFail($id);
        return view('universes_crud.edit', compact('universe'));
    }

    public function update(Request $request, $id) {
        $request->validate(['name' => 'required']);
        $universe = Universe::findOrFail($id);
        $universe->update($request->all());
        return redirect()->route('universes_crud.index');
    }

    public function destroy($id) {
        $universe = Universe::findOrFail($id);
        $universe->delete();
        return redirect()->route('universes_crud.index');
    }
}
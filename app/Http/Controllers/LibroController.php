<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor'  => 'required|string|max:255',
            'anio'   => 'required|integer',
        ]);

        Libro::create($request->all());
        return redirect()->back()->with('status', '¡Libro guardado con éxito!');
    }

    public function edit(Libro $libro)
    {
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor'  => 'required|string|max:255',
            'anio'   => 'required|integer',
        ]);

        $libro->update($request->all());
        return redirect()->route('dashboard')->with('status', '¡Libro actualizado correctamente!');
    }

    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->back()->with('status', '¡Libro eliminado del sistema!');
    }
}
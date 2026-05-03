<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LibroController;
use App\Models\Libro;
use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Ruta del Dashboard
Route::get('/dashboard', function () {
    $libros = Libro::all();
    return view('dashboard', compact('libros'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas completas del CRUD de Libros
Route::post('/libros', [LibroController::class, 'store'])->middleware('auth')->name('libros.store');
Route::get('/libros/{libro}/edit', [LibroController::class, 'edit'])->middleware('auth')->name('libros.edit');
Route::put('/libros/{libro}', [LibroController::class, 'update'])->middleware('auth')->name('libros.update');
Route::delete('/libros/{libro}', [LibroController::class, 'destroy'])->middleware('auth')->name('libros.destroy');

// Rutas del perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
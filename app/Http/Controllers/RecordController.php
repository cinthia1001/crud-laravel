<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\Hash;

class RecordController extends Controller
{
    public function create()
    {
        return view('record.create');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:record,email',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        // Crear y guardar el registro
        Record::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Redirigir o mostrar un mensaje de éxito
        return redirect()->route('index')->with('success', 'Registro creado exitosamente.');
    }
}

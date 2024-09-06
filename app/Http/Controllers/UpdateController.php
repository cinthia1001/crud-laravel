<?php
namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function edit($id)
    {
        $record = Record::findOrFail($id); // Encuentra el registro por ID
        return view('modules.user.edit', compact('record')); // Devuelve la vista de edición con los datos del registro
    }
    public function showForm(Request $request)
    {
        // Aquí puedes pasar los parámetros necesarios para encontrar el registro
        // Ejemplo de búsqueda por correo y contraseña (debe ajustarse según tus necesidades)
        $record = Record::where('email', $request->input('email'))
                        ->where('password', Hash::make($request->input('password')))
                        ->first();

        if ($record) {
            return view('modules.user.edit', compact('record'));
        }

        return redirect()->route('busqueda')->with('error', 'Registro no encontrado.');
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:record,email,' . $id,
            'phone' => 'required|string|max:15',
            'password' => 'nullable|string|min:8',
        ]);

        $record = Record::findOrFail($id); // Encuentra el registro por ID

        // Actualiza el registro
        $record->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => $request->filled('password') ? Hash::make($validatedData['password']) : $record->password,
        ]);

        // Redirige o muestra un mensaje de éxito
        return redirect()->route('busqueda')->with('success', 'Registro actualizado exitosamente.');
    }
}

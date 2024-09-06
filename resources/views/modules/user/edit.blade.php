@extends('layouts/main')

@section('contenido')
<h1>Editar Registro</h1>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ route('record.update', $record->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $record->name) }}" required>
    </div>

    <div>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $record->email) }}" required>
    </div>

    <div>
        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone', $record->phone) }}" required>
    </div>

    <div>
        <label for="password">Contraseña (deja en blanco para no cambiar):</label>
        <input type="password" id="password" name="password">
    </div>

    <button type="submit">Actualizar</button>
</form>
@endsection

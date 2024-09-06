@extends('layouts/main')

@section('contenido')
<h1>Crear Registro</h1>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ route('record.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" required>
    </div>

    <div>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">Guardar</button>
</form>

@endsection

@extends('layouts/main')

@section('contenido')
<h1>Buscar Registro</h1>
<form action="{{ route('record.showForm') }}" method="GET">
    @csrf

    <div>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">Buscar Registro</button>
</form>

@endsection

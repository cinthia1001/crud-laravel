@extends('layouts/main')

@section('contenido')
<h1>Registros</h1>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
       <!-- Asegúrate de que esto esté en busqueda.blade.php -->
@foreach ($records as $record)
<tr>
    <td>{{ $record->id }}</td>
    <td>{{ $record->name }}</td>
    <td>{{ $record->email }}</td>
    <td>{{ $record->phone }}</td>
    <td>{{ $record->password }}</td>
    <td><a href="{{ route('record.edit', $record->id) }}">Editar</a></td>
</tr>
@endforeach

    </tbody>
</table>
@endsection

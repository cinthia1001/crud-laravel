<?php
namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function busqueda()
    {
        // Obtiene todos los registros
        $records = Record::all();
        
        // Devuelve la vista con los registros
        return view('modules.user.busqueda', compact('records'));
    }
}

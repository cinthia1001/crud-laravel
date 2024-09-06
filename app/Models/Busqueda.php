<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Busqueda extends Model
{
    protected $table = 'record';

    protected $fillable = [
        'name', 'email', 'phone', 'password',

    ];
}
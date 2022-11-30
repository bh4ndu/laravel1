<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Alumno;

class UsuariosController extends Controller
{
    function listar() {
        $alumnos = Alumno::join('estados', 'alumnos.estado_id', '=', 'estados.id')
                    ->orderBy('edad', 'DESC')           
                    ->get();
        // return dd($alumnos);

        return view('listado', compact('alumnos'));
    }
}

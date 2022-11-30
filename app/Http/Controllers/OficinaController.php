<?php

namespace App\Http\Controllers;
use App\Models\offices;

use Illuminate\Http\Request;
use DB;

class OficinaController extends Controller
{
    function listar() {
        $oficinas = DB::table('offices')->get();
        //return dd($oficinas);
        return view('oficinas', compact('oficinas'));
    }
}

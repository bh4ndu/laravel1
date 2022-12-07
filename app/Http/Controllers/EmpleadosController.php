<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use DB;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    function index1() {
        $listado = DB::table("employees")->get();
        return view('empleados', compact('listado'));
    }
}

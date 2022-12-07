<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use DB;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    function index2() {
        $listado = DB::table("products")->get();
        return view('ventas', compact('listado'));
    }
}

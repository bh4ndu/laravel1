<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    function listar() {
        return view("pedidos");
    }
}

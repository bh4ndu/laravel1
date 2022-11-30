<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JesusController extends Controller
{
    function listar() {
        return view("jesus");
    }
}

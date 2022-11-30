<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function listar() {
        $clientes = Customer::get();
        return dd($clientes);
    }
}


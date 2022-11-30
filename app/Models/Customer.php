<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'customerNumber',
        'customerName',
        'contactLasName',
        'contactFirstName',
        'phone',
        'adressLine1',
        'adressLine2',
        'city',
        'state',
        'postalCode',
        'country',
        'salesRepEmployeeNumber',
        'creditLimit'
    ];
}


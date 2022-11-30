<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offices extends Model
{
    use HasFactory;
    protected $table = 'offices';
    protected $fillable = [
        'officeCode',
        'city',
        'phone',
        'addressLine2',
        'state',
        'country',
        'postalCode',
        'territory',
    ];
}

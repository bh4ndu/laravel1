<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    // AQUI EMPIEZO A CODEAR
    protected $table = 'estados';
    protected $fillable = [
        'estado'
    ];
}

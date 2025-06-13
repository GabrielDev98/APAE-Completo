<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotaFiscal extends Model
{
    protected $table = 'notas_fiscais';

    protected $fillable = [
        'numero',
        'data',
        'tipo',
        'cliente',
        'valor',
        'status',
    ];

    protected $casts = [
        'data' => 'date',
    ];
}
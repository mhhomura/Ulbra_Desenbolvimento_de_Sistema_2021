<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contratacao extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao',
        'area_atuação',
        'user_id',
        'empresa_id',
        'status',
        'status_pagamento',
        'id_pagamento',
        'date_agendada',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cnpj',
        'descricao',
        'area_atuação',
        'user_id',
        'foto',
        'status',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portefolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'texto',
        'link',
        'imagem',
        'categoria_id',
    ];
}

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
        'desenvolvimento',
        'imagem',
        'categoria_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

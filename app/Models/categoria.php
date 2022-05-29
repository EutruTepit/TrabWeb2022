<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';

    function produtoCategoria(){
        return $this->hasMany(Produto_categoria::class, 'categoria_id', 'id');
    }

}

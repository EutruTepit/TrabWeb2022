<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fornecedor;

class Produto extends Model
{
    use HasFactory;
    protected $table = "produto";

    function fornecedor()
    {
        return $this->belongsTo(fornecedor::class, 'idFornecedor', 'id');
    }

    function produtoCategoria(){
        return $this->hasMany(produto_categoria::class, 'produto_id', 'id');
    }
}

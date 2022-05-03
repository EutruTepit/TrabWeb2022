<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto_categoria extends Model
{
    use HasFactory;
    protected $table = 'produto_categoria';

    function produtos(){
        return $this->belongsToMany(produto::class);
    }

    function categorias(){
        return $this->belongsTo(Categoria::class);
    }
}

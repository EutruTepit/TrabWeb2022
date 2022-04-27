<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produto;

class fornecedor extends Model
{
    use HasFactory;

    protected $table = "fornecedor";

    function produto()
    {
        return $this->hasMany(produto::class, 'idFornecedor', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produto;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = "fornecedor";

    function produto()
    {
        return $this->hasMany(Produto::class, 'idFornecedor', 'id');
    }
}

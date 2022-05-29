<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    function getCategorias(){
        $categorias = Categoria::all();

        return $categorias;
    }
}

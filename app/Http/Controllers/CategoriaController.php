<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class Categorias extends Controller
{
    function getCategorias(){
        $categorias = Categoria::all();

        return $categorias;
    }
}

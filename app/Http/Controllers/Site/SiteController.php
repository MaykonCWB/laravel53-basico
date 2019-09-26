<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function __construct() //Quando metodo construtor é rodade ele se torna o 1° metodo a ser lido pelo sistema*/
    {
            $this -> middleware('auth') //todos os metodos cdo controler irão passar pea middleware 'auth'
                ->only([
                    'contato',
                    'categoria'
                ]);
    }

    public function index()
    {
        return 'Home Page do Site';
    }

    public function contato()
    {
        return 'Pagina para Contato';
    }

    public function categoria($id)
    {
        return "Listagem dos posts da categoria: {$id}";
    }

    public function categoriaOp($id = 100)
    {
        return "Listagem dos posts da categoriaOp: {$id}";
    }

}

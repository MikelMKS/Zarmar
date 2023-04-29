<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PaginaWebController extends Controller
{
    public function index(){
        return view('Pagina.index');
    }

    public function indexZar(){
        $categorias = DB::connection('mysql')->select("SELECT * FROM categorias WHERE estatus = 0");
        $imagenes = DB::connection('mysql')->select("SELECT id FROM productos WHERE imagen = 1 AND estatus = 0 ORDER BY RAND() LIMIT 6");

        return view('Zar.index',compact('categorias','imagenes'));
    }

    public function nueva(){
        $categorias = DB::connection('mysql')->select("SELECT * FROM categorias WHERE estatus = 0");
        $imagenes = DB::connection('mysql')->select("SELECT id FROM productos WHERE imagen = 1 AND estatus = 0 ORDER BY RAND() LIMIT 6");

        return view('Zar.nueva',compact('categorias','imagenes'));
    }

    public function menu(){
        $idCategoria = $_REQUEST['categoria'];

        $categorias = DB::connection('mysql')->select("SELECT * FROM categorias WHERE estatus = 0");

        $categoria = DB::connection('mysql')->select("SELECT * FROM categorias WHERE id = '$idCategoria'");
        $productos = DB::connection('mysql')->select("SELECT * FROM productos WHERE estatus = 0 AND id_categoria = '$idCategoria'");
        $imagenes = DB::connection('mysql')->select("SELECT * FROM productos WHERE estatus = 0 AND id_categoria = '$idCategoria' AND imagen = 1");

        return view('Zar.menu',compact('categorias','categoria','productos','imagenes'));
    }

    public function distribucion(){
        $categorias = DB::connection('mysql')->select("SELECT * FROM categorias WHERE estatus = 0");

        return view('Zar.distribucion',compact('categorias'));
    }
}

<?php
namespace App\Http\Controllers;
use Http;
use DB;
use App\categoriaModel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\categoryImport;

class categoriaController extends Controller{

    public function cargarCategorias(Request $request){
        return view('layouts.cargaCategorias');
    }

    public function cargaCategory(Request $request){
        $file = request("file");
        $data = Excel::import(new categoryImport,$file);
        return back();
    }
    
}

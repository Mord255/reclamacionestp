<?php
namespace App\Http\Controllers;
use Http;
use DB;
use App\productsModel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\productsImport;

class productsController extends Controller{

    public function principal(Request $request){
        $data = productsModel::mostrarProductos();
        return view('layouts.home',compact('data'));
    }

    public function cargarProductos(Request $request){
        return view('layouts.cargaProducts');
    }

    public function cargaProducts(Request $request){
        $file = request("file");
        $data = Excel::import(new productsImport,$file);
        return back();
    }

    public function stockcero(Request $request){
        productsModel::stockcero();
        return back();
    }
    

    public function mostrarProductos(Request $request){
        $data = productsModel::loginUsuarios(request('username'),request('password'));
        // return view('usuarios.login',compact('data'));
    }

}

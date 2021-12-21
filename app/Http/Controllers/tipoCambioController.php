<?php

namespace App\Http\Controllers;
use Http;
use DB;
use App\tipoCambioModel;
use Illuminate\Http\Request;

class tipoCambioController extends Controller{

    public function actualizarTipoCambio(Request $request){
        $request->validate([
            'compra' => 'required|numeric',
            'venta' => 'required|numeric',
        ]);

        tipoCambioModel::nuevoTipoCambio(request('compra') - 0.01 ,request('venta') + 0.01 );
        return back();
        // return view('usuarios.login',compact('data'));
    }
}

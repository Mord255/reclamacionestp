<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class tipoCambioModel extends Model{

    public static function nuevoTipoCambio($compra,$venta){
        $sql = "INSERT INTO table_tp_tipo_cambio(table_tp_tipo_cambio_compra, table_tp_tipo_cambio_venta) VALUES (?,?);";
        $result= DB::select($sql,[$compra,$venta]);
        return $result;
    }
    
}

<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class categoriaModel extends Model{
    
    public static function nuevaCategoria($lineaDe,$categoria){
        $sql = "INSERT INTO table_tp_category(table_tp_category_linea_de, table_tp_category_categoria) VALUES (?,?);";
        $result= DB::select($sql,[$lineaDe,$categoria]);
        return $result;
    }
}

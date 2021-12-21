<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class productsModel extends Model{ 

    public static function mostrarProductos(){
        $sql = "SELECT * FROM table_tp_products INNER JOIN table_tp_category ON table_tp_products.table_tp_products_linea_de_categoria = table_tp_category.table_tp_category_linea_de ;";
        $result= DB::select($sql);
        return $result;
    }

    public static function nuevoProducto($codigo,$marca,$nombre,$lineaCategoria,$stock,$statusStock,$fullDolares,$fullSoles,$precioX){
        $sql = "INSERT INTO table_tp_products(table_tp_products_codigo, table_tp_products_marca, table_tp_products_nombre, table_tp_products_linea_de_categoria, table_tp_products_stock,table_tp_products_estado_stock, table_tp_products_costo_full_dolares, table_tp_products_costo_full_soles, table_tp_products_precio_x) VALUES (?,?,?,?,?,?,?,?,?);";
        $result= DB::select($sql,[$codigo,$marca,$nombre,$lineaCategoria,$stock,$statusStock,$fullDolares,$fullSoles,$precioX]);
        return $result;
    }

    public static function actualizarProducto($marca,$nombre,$lineaCategoria,$stock,$estado,$statusStock,$fullDolares,$fullSoles,$precioX,$codigo){
        $sql = "UPDATE table_tp_products SET table_tp_products_marca=? ,table_tp_products_nombre=?,table_tp_products_linea_de_categoria=?, table_tp_products_stock=?,table_tp_products_estado=?,table_tp_products_estado_stock=?, table_tp_products_costo_full_dolares=? ,table_tp_products_costo_full_soles=?,table_tp_products_precio_x=? WHERE table_tp_products_codigo = ?";
        $result= DB::select($sql,[$marca,$nombre,$lineaCategoria,$stock,$estado,$statusStock,$fullDolares,$fullSoles,$precioX,$codigo]);
        return $result;
    }

    public static function ultimoTipoCambio(){
        $sql = "SELECT * FROM table_tp_tipo_cambio WHERE table_tp_tipo_cambio_fecha = (SELECT MAX(table_tp_tipo_cambio_fecha) FROM table_tp_tipo_cambio);";
        $result= DB::select($sql);
        return $result;
    }

    public static function existeProducto($codigo){
        $sql = "SELECT * FROM table_tp_products WHERE table_tp_products_codigo = ?";
        $result= DB::select($sql,[$codigo]);
        return $result;
    }

    public static function existeCategoria($lineaDe){
        $sql = "SELECT * FROM table_tp_category WHERE table_tp_category_linea_de = ?";
        $result= DB::select($sql,[$lineaDe]);
        return $result;
    }

    public static function stockcero(){
        $sql = "UPDATE table_tp_products SET table_tp_products_estado= 0 ;";
        $result= DB::select($sql);
        return $result;
    }

}

<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class reclamacionesModel extends Model{

    public static function nuevoReclamo($reclamante_tipo_documento,$reclamante_numero_documento,$reclamante_nombres,$reclamante_apellido_paterno,$reclamante_apellido_materno,$reclamante_direccion,$reclamante_departamento,$reclamante_provincia,$reclamante_distrito,$reclamante_telefono,$reclamante_email,$producto_businessType,$producto_monto_reclamado,$producto_marca,$producto_descripcion,$tipo_reclamo,$detalle_reclamo,$numero_pedido,$menor_edad,$tipo_documento_edad,$numero_documento_edad,$numero_telefono_edad,$nombres_edad,$apellidos_edad,$politicas,$politicas_dt){
        $sql = "INSERT INTO table_tp_reclamaciones(`table_tp_reclamaciones_reclamante_tipo_documento`, `table_tp_reclamaciones_reclamante_numero_documento`, `table_tp_reclamaciones_reclamante_nombres`, `table_tp_reclamaciones_reclamante_apellido_paterno`, `table_tp_reclamaciones_reclamante_apellido_materno`, `table_tp_reclamaciones_reclamante_direccion`, `table_tp_reclamaciones_reclamante_departamento`, `table_tp_reclamaciones_reclamante_provincia`, `table_tp_reclamaciones_reclamante_distrito`, `table_tp_reclamaciones_reclamante_telefono`, `table_tp_reclamaciones_reclamante_email`, `table_tp_reclamaciones_producto_tipo`, `table_tp_reclamaciones_producto_monto_producto`, `table_tp_reclamaciones_producto_marca_producto`, `table_tp_reclamaciones_producto_descripcion_producto`, `table_tp_reclamaciones_detalle_tipo`, `table_tp_reclamaciones_detalle_detalle`, `table_tp_reclamaciones_detalle_pedido`, `table_tp_reclamaciones_apoderado_menor_edad`, `table_tp_reclamaciones_apoderado_tipo_documento`, `table_tp_reclamaciones_apoderado_numero_documento`, `table_tp_reclamaciones_apoderado_telefono`, `table_tp_reclamaciones_apoderado_nombres`, `table_tp_reclamaciones_apoderado_apellidos`, `table_tp_reclamaciones_politica_privacidad`, `table_tp_reclamaciones_tratamiento_datos`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $result= DB::select($sql,[$reclamante_tipo_documento,$reclamante_numero_documento,$reclamante_nombres,$reclamante_apellido_paterno,$reclamante_apellido_materno,$reclamante_direccion,$reclamante_departamento,$reclamante_provincia,$reclamante_distrito,$reclamante_telefono,$reclamante_email,$producto_businessType,$producto_monto_reclamado,$producto_marca,$producto_descripcion,$tipo_reclamo,$detalle_reclamo,$numero_pedido,$menor_edad,$tipo_documento_edad,$numero_documento_edad,$numero_telefono_edad,$nombres_edad,$apellidos_edad,$politicas,$politicas_dt]);
        return $result;
    }

    public static function lastId(){
        $sql = "SELECT LAST_INSERT_ID() as lastId;";
        $result= DB::select($sql);
        return $result;
    }

    public static function mostrarReclamo($id){
        $sql = "SELECT * FROM table_tp_reclamaciones WHERE table_tp_reclamaciones_id = ? ;";
        $result= DB::select($sql,[$id]);
        return $result;
    }
}

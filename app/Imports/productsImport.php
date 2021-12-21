<?php
namespace App\Imports;
use App\productsModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class productsImport implements ToModel{

    /**
    * @param ToModel $row
    */

    public function model(array $row){//$codigo,$marca,$nombre,$lineaCategoria,$stock,$statusStock,$fullDolares,$fullSoles,$precioX
        if (!($row[0]== null && $row[1] == null && $row[2] == null && $row[3] == null && $row[4] == null && $row[5] == null && $row[6] == null)) {
            
            $tipoCambio = productsModel::ultimoTipoCambio();
            $codigo = productsModel::existeProducto($row[1]);
            $lineaDe = productsModel::existeCategoria($row[4]);
            $stock = $row[3] ;

            if ($row[3] == " " || $row[3] == 0 ) {
                $statusStock = 0 ;
            }else{
                $statusStock = 1 ;
            }

            if ($row[5] == null) {
                $precioSoles = null;
            }else{
                $precioSoles = floatval($row[5]) * floatval($tipoCambio[0]->table_tp_tipo_cambio_venta);
            }

            if ($lineaDe == null || $lineaDe == []) {
                $lineaDeCategoria = "sin categorizar" ;
            }else {
                $lineaDeCategoria = $row[4];
            }

            // dd($row[3],$statusStock);
            
            if ( $codigo == null ) {//codigo, marca, nombre, linea_de_categoria, stock,estado_stock, costo_full_dolares, costo_full_soles, precio_x
                productsModel::nuevoProducto($row[1],$row[0],$row[2],$lineaDeCategoria,$stock,$statusStock,$row[5],$precioSoles,$row[6]);
            }else {//$marca,$nombre,$lineaCategoria,$stock,$estado,$statusStock,$fullDolares,$fullSoles,$precioX,$codigo
                productsModel::actualizarProducto($row[0],$row[2],$lineaDeCategoria,$stock,1,$statusStock,$row[5],$precioSoles,$row[6],$row[1]);
            }
        }
    }
}
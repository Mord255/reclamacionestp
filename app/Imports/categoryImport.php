<?php

namespace App\Imports;

use App\categoriaModel;
use Maatwebsite\Excel\Concerns\ToModel;

class categoryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row){
        if (!($row[0]== null && $row[1] == null)) {
            categoriaModel::nuevaCategoria($row[0],$row[1]);
        }
    }
}

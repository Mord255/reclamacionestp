<?php

function precioVenta($value,$categoria){
    $resultado = 0 ;

    if ($categoria == "Notebooks") {
        $resultado = $value + ($value * 0.15) ;
    }elseif ($categoria == "Impresoras") {
        $resultado = $value + ($value * 0.15) ;
    }else {
        switch ($value) {
            case $value >= 0 && $value < 10 :
                $resultado = $value + ($value * 1) ;
                break;
            case $value >= 10 && $value < 30 :
                $resultado = $value + ($value * 0.5) ;
                break;
            case $value >= 30 && $value < 50 :
                $resultado = $value + ($value * 0.3) ;
                break;
            case $value >= 50 && $value < 100 :
                $resultado = $value + ($value * 0.3) ;
                break;
            case $value >= 100 && $value < 200 :
                $resultado = $value + ($value * 0.3) ;
                break;
            case $value >= 200 && $value < 500 :
                $resultado = $value + ($value * 0.2) ;
                break;
            case $value >= 500 && $value < 1000 :
                $resultado = $value + ($value * 0.2) ;
                break;
            case $value >= 1000 && $value < 3000 :
                $resultado = $value + ($value * 0.2) ;
                break;
            case $value >= 3000 && $value < 5000 :
                $resultado = $value + ($value * 0.15) ;
                break;
            case $value >= 5000 :
                $resultado = $value + ($value * 0.1) ;
                break;
            default:
                $resultado = "Error" ;
                break;
        }
    }

    $result = str_split(strval($resultado));
    $contador = 0 ;
    $final = 0 ;

    foreach ($result as $key => $value) {
        if ($value == ".") {
            break;
        }
        $contador++;
    }

    if ( $contador == 2 ) {
        $final = floatval((round($resultado)%2 === 0) ? round($resultado) : round(($resultado+2/2)/2)*2)-0.1 ;
    }elseif ($contador == 3) {
        $final = floatval((round($resultado)%5 === 0) ? round($resultado) : round(($resultado+5/2)/5)*5) ;
    }else{
        $final = floatval((round($resultado)%10 === 0) ? round($resultado) : round(($resultado+10/2)/10)*10) ;
    }

    // function roundUpToAny($n,$x=5) {
    //     return (round($n)%5 === 0) ? round($n) : round(($n+5/2)/5)*5;
    // }
    return $final ;
}

function precioLista($value){
    switch ($value) {
        case $value < 50 :
            $resultado = $value ;
            break;
        case $value >= 50 && $value < 100 :
            $resultado = $value + 30 ;
            break;
        case $value >= 100 && $value < 500 :
            $resultado = $value + 50 ;
            break;
        case $value >= 500 && $value < 1000 :
            $resultado = $value + 100 ;
            break;
        case $value >= 1000 && $value < 3000 :
            $resultado = $value + 200 ;
            break;
        case $value >= 3000 && $value < 5000 :
            $resultado = $value + 400 ;
            break;
        case $value >= 5000 :
            $resultado = $value + 700 ;
            break;
        default:
            $resultado = "Error" ;
            break;
    }

    $result = str_split(strval($resultado));
    $contador = 0 ;
    $final = 0 ;

    foreach ($result as $key => $value) {
        if ($value == ".") {
            break;
        }
        $contador++;
    }

    if ( $contador == 2 ) {
        $final = floatval((round($resultado)%2 === 0) ? round($resultado) : round(($resultado+2/2)/2)*2)-0.1 ;
    }elseif ($contador == 3) {
        $final = floatval((round($resultado)%5 === 0) ? round($resultado) : round(($resultado+5/2)/5)*5) ;
    }else{
        $final = floatval((round($resultado)%10 === 0) ? round($resultado) : round(($resultado+10/2)/10)*10) ;
    }

    return $final ;
}

function precioOfertaY($value,$categoria){
    
    $resultado = 0 ;

    if ($categoria == "Notebooks") {
        $resultado = $value + ($value * 0.12) ;
    }elseif ($categoria == "Impresoras") {
        $resultado = $value + ($value * 0.12) ;
    }else {
        switch ($value) {
            case $value >= 0 && $value < 10 :
                $resultado = $value + ($value * 0.6) ;
                break;
            case $value >= 10 && $value < 30 :
                $resultado = $value + ($value * 0.45) ;
                break;
            case $value >= 30 && $value < 50 :
                $resultado = $value + ($value * 0.25) ;
                break;
            case $value >= 50 && $value < 100 :
                $resultado = $value + ($value * 0.25) ;
                break;
            case $value >= 100 && $value < 200 :
                $resultado = $value + ($value * 0.25) ;
                break;
            case $value >= 200 && $value < 500 :
                $resultado = $value + ($value * 0.15) ;
                break;
            case $value >= 500 && $value < 1000 :
                $resultado = $value + ($value * 0.15) ;
                break;
            case $value >= 1000 && $value < 3000 :
                $resultado = $value + ($value * 0.15) ;
                break;
            case $value >= 3000 && $value < 5000 :
                $resultado = $value + ($value * 0.1) ;
                break;
            case $value >= 5000 :
                $resultado = $value + ($value * 0.05) ;
                break;
            default:
                $resultado = "Error" ;
                break;
        }
    }

    $result = str_split(strval($resultado));
    $contador = 0 ;
    $final = 0 ;

    foreach ($result as $key => $value) {
        if ($value == ".") {
            break;
        }
        $contador++;
    }

    if ( $contador == 2 ) {
        $final = floatval((round($resultado)%2 === 0) ? round($resultado) : round(($resultado+2/2)/2)*2)-0.1 ;
    }elseif ($contador == 3) {
        $final = floatval((round($resultado)%5 === 0) ? round($resultado) : round(($resultado+5/2)/5)*5) ;
    }else{
        $final = floatval((round($resultado)%10 === 0) ? round($resultado) : round(($resultado+10/2)/10)*10) ;
    }

    return $final ;
}


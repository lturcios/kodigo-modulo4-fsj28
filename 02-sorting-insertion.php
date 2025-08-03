<?php

function comprobarOrden(&$arr) {
    $valor = -1;
    $ultimo = -1;
    for($i = count($arr) - 1; $i > 0; $i--){
        if($arr[$i] < $arr[$i-1] && $valor < 0){
            $valor = $arr[$i];
            continue;
        }
        if($arr[$i] > $valor && $valor >= 0) {
            $arr[$i+1] = $arr[$i];
            continue;
        }
        if($arr[$i] < $valor && $valor >= 0) {
            $arr[$i+1] = $valor;
            $ultimo = $i;
            break;
        }
    }
    return $ultimo;
}


$arr = [1, 2, 4, 5, 3, 6, 9, 8, 7, 11, 13, 10, 12];
echo "Orden recibido: " . implode(" ", $arr) . "<hr/>";
while(true) {
    if (comprobarOrden($arr) < 0) {
        echo "Orden completo: " . implode(" ", $arr) . " -> Todo el arreglo ha sido comprobado <hr/>";
        break;
    } else {
        echo "Orden resultante: " . implode(" ", $arr) . " -> Pero falta comprobacion.<hr/>";
    }
}
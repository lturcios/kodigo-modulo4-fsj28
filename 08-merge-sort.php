<?php

function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    // Dividir el arreglo en dos mitades
    $mitad = floor(count($arr) / 2);
    $izquierda = array_slice($arr, 0, $mitad);
    $derecha = array_slice($arr, $mitad);

    $izquierda = mergeSort($izquierda);
    $derecha = mergeSort($derecha);

    return combinar($izquierda, $derecha);
}

function combinar($izquierda, $derecha) {
    $resultado = [];
    $i = 0;
    $j = 0;

     while ($i < count($izquierda) && $j < count($derecha)) {
        if ($izquierda[$i] <= $derecha[$j]) {
            $resultado[] = $izquierda[$i];
            $i++;
        } else {
            $resultado[] = $derecha[$j];
            $j++;
        }
    }

    while ($i < count($izquierda)) {
        $resultado[] = $izquierda[$i];
        $i++;
    }

    while ($j < count($derecha)) {
        $resultado[] = $derecha[$j];
        $j++;
    }

    return $resultado;
}

// Ejemplo de uso
$arr = [38, 27, 43, 3, 9, 82, 10];
$ordenado = mergeSort($arr);
echo "Arreglo original: " . implode(", ", $arr) . "<br/>";
echo "Arreglo ordenado: " . implode(", ", $ordenado) . "<br/>";
echo "<hr/>";

$arr2 = [5, 2, 9, 1, 5, 6];
$ordenado2 = mergeSort($arr2);
echo "Arreglo original: " . implode(", ", $arr2) . "<br/>";
echo "Arreglo ordenado: " . implode(", ", $ordenado2) . "<br/>";
echo "<hr/>";

$arr3 = [1, 4, 2, 8, 5, 7];
$ordenado3 = mergeSort($arr3);
echo "Arreglo original: " . implode(", ", $arr3) . "<br/>";
echo "Arreglo ordenado: " . implode(", ", $ordenado3) . "<br/>";
echo "<hr/>";

$arr4 = [10, 20, 30, 40, 50];
$ordenado4 = mergeSort($arr4);
echo "Arreglo original: " . implode(", ", $arr4) . "<br/>";
echo "Arreglo ordenado: " . implode(", ", $ordenado4) . "<br/>";
echo "<hr/>";

$arr5 = [100, 90, 80, 70, 60];
$ordenado5 = mergeSort($arr5);
echo "Arreglo original: " . implode(", ", $arr5) . "<br/>";
echo "Arreglo ordenado: " . implode(", ", $ordenado5) . "<br/>";
echo "<hr/>";
<?php

function veryBigSum($ar) {
    $suma = 0;
    foreach ($ar as $numero) {
        $suma += $numero;
    }
    return $suma;
}

// Ejemplo de uso
$ar = [2000000001, 1000000002, 1000000003, 1000000004, 1000000005];
$resultado = veryBigSum($ar);
echo "La suma de los números es: $resultado\n";
echo "<hr/>";

$ar2 = [1, 2, 3, 4, 5];
$resultado2 = veryBigSum($ar2);
echo "La suma de los números es: $resultado2\n";
echo "<hr/>";

$ar3 = [1000000000, 2000000000, 3000000000];
$resultado3 = veryBigSum($ar3);
echo "La suma de los números es: $resultado3\n";
echo "<hr/>";

$ar4 = [999999999, 999999998, 999999997];
$resultado4 = veryBigSum($ar4);
echo "La suma de los números es: $resultado4\n";
echo "<hr/>";
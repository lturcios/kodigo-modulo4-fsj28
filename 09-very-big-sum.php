<?php

function veryBigSum($ar) {
    $suma = 0;
    foreach ($ar as $numero) {
        $suma += $numero;
    }
    return $suma;
}

// Ejemplo de uso
$arrays = [
    [1000000001, 1000000002, 1000000003, 1000000004, 1000000005],
    [1, 2, 3, 4, 5],
    [1000000000, 2000000000, 3000000000],
    [999999999, 999999998, 999999997]
];
foreach ($arrays as $index => $ar) {
    $resultado = veryBigSum($ar);
    echo "🔢 Array " . ($index + 1) . ": " . implode(", ", $ar) . "<br/>";
    echo "🧮 La suma de los números del array " . ($index + 1) . " es: $resultado\n";
    echo "<hr/>";
}

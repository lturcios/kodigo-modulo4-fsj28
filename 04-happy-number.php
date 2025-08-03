<?php

function sumaDeCuadradosDeDigitos($numero) {
    $suma = 0;
    // Convertimos el número a una cadena para iterar sobre sus dígitos
    $digitos = str_split($numero);
    foreach ($digitos as $digito) {
        $suma += $digito * $digito;
    }
    return $suma;
}
function isHappyNumber($n) {
    $vistos = [];

    while ($n !== 1 && !isset($vistos[$n])) {
        $vistos[$n] = true;
        $n = sumaDeCuadradosDeDigitos($n);
    }

    return $n === 1;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 19, 23, 28, 99];
foreach ($numeros as $numero) {
    echo "Analizando el número: $numero <br/>";
    if (isHappyNumber($numero)) {
        echo "$numero es un número feliz 🙂" . "<hr/>";
    } else {
        echo "$numero no es un número feliz 😔" . "<hr/>";
    }
}

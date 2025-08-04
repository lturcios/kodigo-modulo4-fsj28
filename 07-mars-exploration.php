<?php

// 0	1	2
// S	O	S
// 0	1	2

function marsExploration($sos) {
    $longitud = strlen($sos);
    $errores = 0;

    for ($i = 0; $i < $longitud; $i++) {
        if ($i % 3 == 0) {
            // Esperamos 'S'
            if ($sos[$i] !== 'S') {
                $errores++;
            }
        } elseif ($i % 3 == 1) {
            // Esperamos 'O'
            if ($sos[$i] !== 'O') {
                $errores++;
            }
        } else {
            // Esperamos 'S'
            if ($sos[$i] !== 'S') {
                $errores++;
            }
        }
    }

    return $errores;
}

// Ejemplo de uso
$seniales = [
    "SOSSPSSQSSOR",
    "SOSSOT",
    "SOSOOS",
    "SOS",
    "SOSSSS",
    "SOSSSOS"
];
foreach ($seniales as $sos) {
    $cantidadErrores = marsExploration($sos);
    echo "🆘 La cantidad de errores en el mensaje '$sos' es: $cantidadErrores";
    echo "<hr/>";
}

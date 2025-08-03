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
$sos = "SOSSPSSQSSOR";
$cantidadErrores = marsExploration($sos);
echo "La cantidad de errores en el mensaje '$sos' es: $cantidadErrores";
echo "<hr/>";

$sos = "SOSSOT";
$cantidadErrores = marsExploration($sos);
echo "La cantidad de errores en el mensaje '$sos' es: $cantidadErrores";
echo "<hr/>";

$sos = "SOSOOS";
$cantidadErrores = marsExploration($sos);
echo "La cantidad de errores en el mensaje '$sos' es: $cantidadErrores";
echo "<hr/>";

$sos = "SOS";
$cantidadErrores = marsExploration($sos);
echo "La cantidad de errores en el mensaje '$sos' es: $cantidadErrores";
echo "<hr/>";

$sos = "SOSSSS";
$cantidadErrores = marsExploration($sos);
echo "La cantidad de errores en el mensaje '$sos' es: $cantidadErrores";
echo "<hr/>";

$sos = "SOSSSOS";
$cantidadErrores = marsExploration($sos);
echo "La cantidad de errores en el mensaje '$sos' es: $cantidadErrores";
echo "<hr/>";
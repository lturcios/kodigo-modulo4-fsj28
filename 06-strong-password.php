<?php

function strongPasswordChecker($password) {
    $longitud = strlen($password);
    $tieneMinusculas = preg_match('/[a-z]/', $password);
    $tieneMayusculas = preg_match('/[A-Z]/', $password);
    $tieneDigitos = preg_match('/\d/', $password);
    $tieneEspeciales = preg_match('/[!@#$%^&*()\-\+]/', $password);
    $tiposFaltantes = 4 - ($tieneMinusculas + $tieneMayusculas + $tieneDigitos + $tieneEspeciales);
    $caracteresFaltantes = max(0, 6 - $longitud);
    return max($tiposFaltantes, $caracteresFaltantes);
}

// Ejemplo
$password = "2bbbb";
$cantidadFaltante = strongPasswordChecker($password);
echo "La contraseña '$password' requiere $cantidadFaltante caracteres adicionales para ser segura.";
echo "<hr/>";

$password = "2bb#A";
$cantidadFaltante = strongPasswordChecker($password);
echo "La contraseña '$password' requiere $cantidadFaltante caracteres adicionales para ser segura.";
echo "<hr/>";

// Pruebas adicionales
$password = "Ab1";
$cantidadFaltante = strongPasswordChecker($password);
echo "La contraseña '$password' requiere $cantidadFaltante caracteres adicionales para ser segura.";
echo "<hr/>";

$password = "#HackerRank";
$cantidadFaltante = strongPasswordChecker($password);
echo "La contraseña '$password' requiere $cantidadFaltante caracteres adicionales para ser segura.";
echo "<hr/>";


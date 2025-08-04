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
$passwords = [
    "2bbbb",
    "2bb#A",
    "Ab1",
    "#HackerRank"
];

foreach ($passwords as $password) {
    $cantidadFaltante = strongPasswordChecker($password);
    echo "🔐 La contraseña <strong>$password</strong> requiere $cantidadFaltante caracteres adicionales para ser segura.<br/>";
    echo "<hr/>";
}
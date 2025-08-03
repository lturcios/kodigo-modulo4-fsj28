<?php
$nums = [-1,0,3,5,9,12];

function binarySearch($nums, $target) {
    $izquierda = 0;
    $derecha = count($nums) - 1;

    while ($izquierda <= $derecha) {
        $mitad = (int)(($izquierda + $derecha) / 2);

        if ($nums[$mitad] === $target) {
            return $mitad;
        } elseif ($nums[$mitad] < $target) {
            $izquierda = $mitad + 1;
        } else {
            $derecha = $mitad - 1;
        }
    }

    return -1;
}

echo "📄 Dados los números: " . implode(", ", $nums) . "<hr/>";

$objetivos = [9, 2, 12, 3, 4, 0];
foreach ($objetivos as $objetivo) {
    echo "🔎 Buscando el objetivo: $objetivo<br/>";
    $result = binarySearch($nums, $objetivo);
    if ($result < 0) {
        echo "❌ El objetivo ($objetivo) no se encuentra en el array.<hr/>";
    } else {
        echo "🎯 El índice del objetivo ($objetivo) es: $result<hr/>";
    }
}
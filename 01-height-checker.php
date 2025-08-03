<?php
function heightChecker($heights) {
    $expected = $heights;
    sort($expected);
    echo "📈 Alturas ordenadas: " . implode(", ", $expected) . "<br>";
    $differ = [];

    for ($i = 0; $i < count($heights); $i++) {
        if ($heights[$i] !== $expected[$i]) {
            $differ[] = $i;
        }
    }

    return $differ;
}


$listas_alturas = [[1, 1, 4, 2, 1, 3], [5, 1, 2, 3, 4], [1, 2, 3, 4, 5], [1, 2, 3, 4, 5, 6]];
foreach ($listas_alturas as $alturas) {
    echo "📈 Alturas recibidas: " . implode(", ", $alturas) . "<br>";
    $result = heightChecker($alturas);
    echo "Cantidad de alturas difieren de lo esperado: " . count($result) . "<br>";
    echo "Indices: " . implode(", ", $result) . "<hr/>";
}

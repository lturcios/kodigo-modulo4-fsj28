<?php

function cakeCandles($candelas) {
    $max = max($candelas);
    $contador = 0;
    foreach ($candelas as $candle) {
        if ($candle == $max) {
            $contador++;
        }
    }

    echo "🕯 La cantidad de velas es: " . count($candelas) . "<br/>";
    echo "🕯 La altura de las velas es: " . implode(", ", $candelas) . "<br/>";
    echo "🕯 La altura de la vela más alta es: " . $max . "<br/>";
    echo "🕯 La cantidad de velas más altas es: " . $contador . "<hr/>";

}

$candelas = [4, 4, 1, 3, 2];
cakeCandles($candelas);

$candelas = [3, 2, 1, 3];
cakeCandles($candelas);

$candelas = [1, 2, 3, 4, 5];
cakeCandles($candelas);

$candelas = [5, 5, 5, 5, 5];
cakeCandles($candelas);

$candelas = [1, 2, 3, 4, 5, 6, 7, 8, 9];
cakeCandles($candelas);
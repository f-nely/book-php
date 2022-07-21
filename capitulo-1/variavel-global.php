<?php

declare(strict_types=1);

$total = 0;
function km2mi(float $quilometros): float
{
    global $total;
    $total += $quilometros;
    return $quilometros * 0.6;
}

echo 'percorreu ' . km2mi(100) . ' milhas <br>';
echo 'percorreu ' . km2mi(200) . ' milhas <br>';
echo 'percorreu no total ' . $total . ' quilômetros <br>';
<?php
function getDistance(float $lat1, float $lon1, float $lat2, float $lon2, string $unit = 'm'): float {
    // Raio da Terra em metros
    $earthRadius = 6371000;

    // Converter graus para radianos
    $lat1 = deg2rad($lat1);
    $lon1 = deg2rad($lon1);
    $lat2 = deg2rad($lat2);
    $lon2 = deg2rad($lon2);

    // Diferença entre as latitudes e longitudes
    $dlat = $lat2 - $lat1;
    $dlon = $lon2 - $lon1;

    // Fórmula de Haversine
    $a = sin($dlat / 2) * sin($dlat / 2) +
         cos($lat1) * cos($lat2) *
         sin($dlon / 2) * sin($dlon / 2);

    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

    // Distância em quilômetros
    $distance = $earthRadius * $c;
    $distance = number_format($distance, 2);

    if ($unit == 'km') {
        $distance /= 1000;
        $distance = number_format($distance, 2);
    }

    return floatval($distance);
}

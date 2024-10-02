<?php
function getDistance($lat1, $lon1, $lat2, $lon2): float {
    // Raio da Terra em quilômetros
    $earthRadius = 6371;

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

    return floatval($distance);
}

// Exemplo de uso
// $lat1 = -23.550520; // Coordenada 1 (São Paulo)
// $lon1 = -46.633308;

// $lat2 = -22.906847; // Coordenada 2 (Rio de Janeiro)
// $lon2 = -43.172896;

// $distancia = getDistance($lat1, $lon1, $lat2, $lon2);

// echo "A distância entre os dois pontos é: " . $distancia . " km";

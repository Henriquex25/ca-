function getDistance(lat1, lon1, lat2, lon2, unit = "m") {
    // Raio da Terra em metros
    const earthRadius = 6371000;

    // Converter graus para radianos
    const toRadians = (angle) => (angle * Math.PI) / 180;

    const dlat = toRadians(lat2 - lat1);
    const dlon = toRadians(lon2 - lon1);

    const lat1Rad = toRadians(lat1);
    const lat2Rad = toRadians(lat2);

    // Fórmula de Haversine
    const a =
        Math.sin(dlat / 2) * Math.sin(dlat / 2) +
        Math.cos(lat1Rad) * Math.cos(lat2Rad) * Math.sin(dlon / 2) * Math.sin(dlon / 2);

    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

    // Distância em metros
    let distance = earthRadius * c;

    if (unit === "km") {
        distance = distance / 1000;
        distance = distance.toFixed(2);
    }

    return parseFloat(distance);
}

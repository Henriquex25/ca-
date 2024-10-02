Função simples para obter a distância (em quilômetros) entre duas coordenadas geográficas.

### Exemplo de Uso
```php
$lat1 = -23.550520; // Coordenada 1 (São Paulo)
$lon1 = -46.633308;

$lat2 = -22.906847; // Coordenada 2 (Rio de Janeiro)
$lon2 = -43.172896;

$distancia = getDistance($lat1, $lon1, $lat2, $lon2);

echo "A distância entre os dois pontos é: " . $distancia . " km";
```

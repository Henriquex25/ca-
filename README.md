## Função simples para obter a distância (em linha reta) entre duas coordenadas geográficas.

### Exemplo de uso em PHP
```php
$lat1 = -23.550520; // Coordenada 1 (São Paulo)
$lon1 = -46.633308;

$lat2 = -22.906847; // Coordenada 2 (Rio de Janeiro)
$lon2 = -43.172896;

$distancia = getDistance($lat1, $lon1, $lat2, $lon2);

echo "A distância entre os dois pontos é: " . $distancia . " metros";
```

### Exemplo de uso em Javascript
```js
const lat1 = -23.55052; // Coordenada 1 (São Paulo)
const lon1 = -46.633308;

const lat2 = -22.906847; // Coordenada 2 (Rio de Janeiro)
const lon2 = -43.172896;

const distancia = getDistance(lat1, lon1, lat2, lon2);

console.log(`A distância entre os dois pontos é: ${distancia} metros`);
```

Tanto em Javascript como em PHP, o último parâmetro "unit" passado para a função "getDistance" pode conter 2 valores "m" (padrão) ou "km" para indicar qual é o tipo de saída desejável sendo "m" para metros e "km" para quilômetros

<?php

// Parte 1: Crear el arreglo con 15 valores aleatorios
$misNumeros = [];
for ($i = 0; $i < 15; $i++) {
    $misNumeros[$i] = rand(1, 100);
}

// Parte 2: Mostrar el contenido del arreglo

// a) Usando print_r()
echo "Contenido del arreglo con print_r():\n";
print_r($misNumeros);

// b) Con foreach
echo "\nContenido del arreglo con foreach:\n";
foreach ($misNumeros as $numero) {
    echo $numero . " ";
}

// c) Con for
echo "\n\nContenido del arreglo con for:\n";
for ($i = 0; $i < count($misNumeros); $i++) {
    echo $misNumeros[$i] . " ";
}

// Parte 3: Funciones de suma

// a) Suma total
function suma_total(array $numeros): int {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

// b) Suma en índices pares
function suma_pares(array $numeros): int {
    $suma = 0;
    for ($i = 0; $i < count($numeros); $i += 2) {
        $suma += $numeros[$i];
    }
    return $suma;
}

// c) Suma en índices impares
function suma_impares(array $numeros): int {
    $suma = 0;
    for ($i = 1; $i < count($numeros); $i += 2) {
        $suma += $numeros[$i];
    }
    return $suma;
}

// Mostrar resultados
echo "\n\nSuma total: " . suma_total($misNumeros);
echo "\nSuma en índices pares: " . suma_pares($misNumeros);
echo "\nSuma en índices impares: " . suma_impares($misNumeros);
?>

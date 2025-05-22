<?php
// Declaración del arreglo
$colores = ["Rojo", "Azul", "Verde", "Amarillo", "Morado"];

// Mostrar todos los colores
echo "Colores: ";
foreach ($colores as $color) {
    echo "$color, ";
}
echo "\n";

// Mostrar el primer color
echo "Primer color: " . $colores[0] . "\n";

// Mostrar el último color
echo "Último color: " . $colores[count($colores) - 1] . "\n";

// Mostrar cantidad total de colores
echo "Cantidad total de colores: " . count($colores) . "\n";
?>

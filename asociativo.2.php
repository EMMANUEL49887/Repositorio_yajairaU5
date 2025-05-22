<?php
// Declaración del arreglo asociativo
$usuario = [
    "Nombre" => "Ana",
    "Edad" => 21,
    "Email" => "ana@email.com",
    "Carrera" => "Ingeniería Informática"
];

// Mostrar cada campo con echo
echo "Datos individuales:\n";
echo "Nombre: " . $usuario["Nombre"] . "\n";
echo "Edad: " . $usuario["Edad"] . "\n";
echo "Email: " . $usuario["Email"] . "\n";
echo "Carrera: " . $usuario["Carrera"] . "\n";

// Modificar la edad
$usuario["Edad"] = 22;

// Agregar campo 'activo'
$usuario["activo"] = true;

// Mostrar todos los datos con foreach
echo "Datos usando foreach:\n";
foreach ($usuario as $clave => $valor) {
    echo "$clave: $valor\n";
}

// Mostrar arreglo completo
echo "Array completo:\n";
print_r($usuario);
?>

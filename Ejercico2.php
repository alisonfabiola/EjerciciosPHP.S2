<?php
/**
 * Calcula la suma de todos los números pares en un array.
 * 
 * @param array $array Lista de números enteros.
 * @return int Suma de los números pares en el array.
 */
function sumaPares($array) {
    $suma = 0; // Almacena la suma de los números pares
    foreach ($array as $numero) {
        if ($numero % 2 == 0) { // Verifica si el número es par
            $suma += $numero; // Agrega el número par a la suma
        }
    }
    return $suma;
}

// Prueba 
$numeros = [10, 15, 20, 25, 30];
echo "La suma de números pares es: " . sumaPares($numeros);
?>

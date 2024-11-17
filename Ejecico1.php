<?php
/**
 * Invierte el orden de los elementos en un array.
 * 
 * @param array $array Lista de números a invertir.
 * @return array Lista con los elementos en orden inverso.
 */
function listaInvertida($array) {
    // array_reverse invierte el array
    return array_reverse($array);
}

// prueba
$numeros2 = [10, 20, 30, 40, 50];
echo "Array original: ";
print_r($numeros);
echo "Array invertido: ";
print_r(listaInvertida($numeros2));
?>

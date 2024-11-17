<?php
/**
 * Calcula la frecuencia de cada carácter en una cadena de texto.
 * 
 * @param string $cadena Cadena de texto a analizar.
 * @return array Array asociativo con la frecuencia de cada carácter.
 */
function frecuenciaCaracteres($cadena) {
    $frecuencia = []; // Array para almacenar la frecuencia de caracteres
    $longitud = strlen($cadena); // Longitud de la cadena

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $cadena[$i];
        // Incrementa la frecuencia del carácter actual
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    return $frecuencia;
}

// prueba
$texto = "php programming";
echo "Frecuencia de caracteres en '$texto': ";
print_r(frecuenciaCaracteres($texto));
?>

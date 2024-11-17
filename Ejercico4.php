<?php
/**
 * Imprime un patrón de pirámide de asteriscos.
 * 
 * @param int $filas Número de filas en la pirámide.
 */
function imprimirPiramide($filas) {
    for ($i = 1; $i <= $filas; $i++) {
        // Imprime espacios para alinear la pirámide
        echo str_repeat(" ", $filas - $i);
        // Imprime asteriscos para formar la pirámide
        echo str_repeat("* ", $i);
        echo "\n";
    }
}

// Ejemplo de uso
$filas = 4;
imprimirPiramide($filas);
?>

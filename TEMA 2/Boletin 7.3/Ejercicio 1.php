<?php

echo "<h1>Ejercicio 1 -- Boletin 7.3</h1><br>";

// Genera un número aleatorio de veces a lanzar el dado.
$tiradas = rand(1,10);

echo "<p>$tiradas Dados</p>";


// Genera las imágenes de los dados
for ($i = 1; $i <= $tiradas; $i++) {
    $dado = rand(1,6);
    echo "<img src='imagenes/$dado.svg'> ";
}

?>
<?php

echo "<h1>Ejercicio 4 -- Boletin 7.3</h1><br>";

//Creo el array de resultados
$resultados = [];



//Genera las imágenes de los dados y añado los resultados al array
echo "<p>Tirada de 6 dados</p>";

for ($i = 1; $i <= 6; $i++) {
    $dado = rand(1,6);
    echo "<img src='imagenes/$dado.svg'> ";
    $resultados[] = $dado;
}



//Genero un dado aleatorio para eliminar de los resultados
echo "<p>Dado a eliminar:</p>";

$dado_eliminar = rand(1,6);
echo "<img src='imagenes/$dado_eliminar.svg'> ";



//Elimino del array de resultados el dado aleatorio y muestro los resultados restantes
$resultados = array_diff($resultados, array($dado_eliminar));


//Muestro los resultados restantes:
echo "<p>Resultados restantes:</p>";

foreach ($resultados as $res) {
    echo "<img src='imagenes/$res.svg'> ";
}
?>
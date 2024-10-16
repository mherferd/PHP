<?php

//Imprimimos los datos que nos llegan del formulario del documento .php anterior
echo "<p>Tus datos originales son: </p>";
foreach ($_REQUEST as $contador){
    echo $contador;
}


//Y ahora imprimimos los datos invertidos
echo "<br><br>Tus datos invertidos son: <br>";

$array_delreves = array_reverse($_REQUEST);
echo "<br>";

foreach ($array_delreves as $reverso){
    echo $reverso;
}

echo "<br><br>";
echo"<a href=Ej7.2.html>Volver al inicio</a>";
?>
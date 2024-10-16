<?php

echo "<h1>Ejercicio 2 -- Boletin 7.3</h1><br>";



echo "<p>Jugador 1:</p>";

//Tirada del jugador 1:
$dado1 = rand(1,6);
echo "<img src='imagenes/$dado1.svg'> ";



echo "<p>Jugador 2:</p>";

//Tirada del jugador 2:
$dado2 = rand(1,6);
echo "<img src='imagenes/$dado2.svg'> ";



//Comparación de resultados:
if ($dado1<$dado2) {
    echo "<p>El ganador es el jugador 2.</p>";
}
else if($dado1>$dado2) {
    echo "<p>El ganador es el jugador 1.</p>";
}
else{
    echo "<p>Empate.</p>";
}
?>
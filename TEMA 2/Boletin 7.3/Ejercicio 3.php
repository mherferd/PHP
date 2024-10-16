<?php

echo "<h1>Ejercicio 3 -- Boletin 7.3</h1><br>";

$ganador_1 = 0;
$ganador_2 = 0;
$empates = 0;

$Resultados_1 = [];
$Resultados_2 = [];

echo "<p>Jugador 1:</p>";

for ($i = 1; $i <= 4; $i++) {
    $dado1 = rand(1,6);
    echo "<img src='imagenes/$dado1.svg'> ";
    $Resultados_1[$i] = $dado1;
}

echo "<p>Jugador 2:</p>";

for ($i = 1; $i <= 4; $i++) {
    $dado2 = rand(1,6);
    echo "<img src='imagenes/$dado2.svg'> ";
    $Resultados_2[$i] = $dado2;
}

for ($i = 1; $i <= 4; $i++){
    if($Resultados_1[$i] < $Resultados_2[$i]){
        $ganador_2++;
}
    else if($Resultados_1[$i] > $Resultados_2[$i]){
        $ganador_1++;
    }
    else{
        $empates++;
    }
}

echo "<p>El jugador 1 ha ganado $ganador_1 veces, el jugador 2 ha ganado $ganador_2 veces, y han empatado $empates veces</p>";

if ($ganador_1<$ganador_2){
    echo "<p>Ha ganado el jugador 2</p>";
}
elseif ($ganador_2<$ganador_1){
    echo "<p>Ha ganado el jugador 1</p>";
}
else{
    echo "<p>Han empatado</p>";
}
?>
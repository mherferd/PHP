<?php

echo "<h1>Ejercicio 3 -- Boletin 7.3</h1><br>";

//Creo variables para contar los ganadores y los empates.
$ganador_1 = 0;
$ganador_2 = 0;
$empates = 0;


//Creo arrays para guardar los resultados de cada jugador.
$Resultados_1 = [];
$Resultados_2 = [];


//Simulo los dados para el jugador 1 y los guardo en arrays.
echo "<p>Jugador 1:</p>";

for ($i = 1; $i <= 4; $i++) {
    $dado1 = rand(1,6);
    echo "<img src='imagenes/$dado1.svg'> ";
    $Resultados_1[$i] = $dado1;
}


//Simulo los dados para el jugador 1 y los guardo en arrays.
echo "<p>Jugador 2:</p>";

for ($i = 1; $i <= 4; $i++) {
    $dado2 = rand(1,6);
    echo "<img src='imagenes/$dado2.svg'> ";
    $Resultados_2[$i] = $dado2;
}


//Comparo los resultados de cada jugador para contar los ganadores. 
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


//Comparo los ganadores para determinar quien ha ganado.
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
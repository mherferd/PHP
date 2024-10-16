
<?php

//EJERCICIO 1 

$var1 = "Hola buenas";
$var2 = 123;
$var3 = 7.6;
$var4 = true;

echo "<p>Cadena: $var1</p>";
echo "<p>Entero: $var2</p>";
echo "<p>Float: $var3</p>";
echo "<p>Booleano: $var4</p><hr>";
?>


<?php

//EJERCICIO 2 

$cadena1 = "Hola buenas tardes";
$cadena2 = "Buenas noches";

$longitud = strlen($cadena1);
$mayusculas = strtoupper($cadena1);
$secuencia = $cadena1.$cadena2;
echo "<p>Cadena: $cadena1  <br> Longitud: $longitud  <br>Mayusuculas:  $mayusculas   <br>Concatenados: $secuencia<hr></p>"

?>

<?php

//EJERCICIO 3 

$cadena3 = "Hola 'buenas' \" tardes \"";
echo "<p>Esta cadena tiene \" y ': $cadena3 <hr></p>"

?>

<?php

//EJERCICIO 4 

$cadena4 = "Hola 'buenas' tardes y $cadena2";
$cadena5 = 'Hola "buenas" tardes y $cadena2';

echo "<p>La primera cadena (con \")muestra la variable: $cadena4 <br> Pero la segunda (con ') no : $cadena5<hr></p>"

?>

<?php

//EJERCICIO 5 

$cadena6 = "<p style=\"color:red;\"> Esto esta en rojo</p><hr>";
echo "$cadena6"

?>


<?php

//EJERCICIO 6
//WINDOW NO ENTIENDO PÁRRAFOS, TABULACIONES... 

?>



<?php

//EJERCICIO 7


$cadena1 = "Hola buenas tardes";
$cadena2 = "Buenas noches";
$secuencia = $cadena1.$cadena2;

echo "<p>Concatenados: $secuencia<hr></p>"
?>


<?php

//EJERCICIO 8


$cadena1 = "Hola buenas tardes";
$cadena2 = "Buenas noches";
$secuencia = $cadena1."<br>".$cadena2;

echo "<p>Concatenados: $secuencia<hr></p>"
?>

<?php

//EJERCICIO 9


$ej9 = "Hola buenas tardes";

echo "<p>$ej9<hr></p>"
?>


<?php

//EJERCICIO 10

$ej10_1 = 7;
$ej10_2 = 9;
$suma = $ej10_1+ $ej10_2;
echo "<p>$ej10_1 y $ej10_2 es igual a  $suma<hr></p>"
?>


<?php

//EJERCICIO 11
$ej11 = "Buenas"; 
echo "Hola, " . $ej11 . ". ¿Cómo estás?<br><hr><br>"; 

?>




<?php

//EJERCICIO 12
$ej12 = "Buenas"; 
echo "Hola, " . $ej12 . ". ¿Cómo estás?<hr>"; 

?>


<?php

//EJERCICIO 13
$ej13_1 = 10; 
$ej13_2 = 7.6; 
$ej13_3 = true; 

echo "<p>Entero: $ej13_1<br> Float: $ej13_2<br> Booleano: $ej13_3</p><hr><br>"


?>

<?php

//EJERCICIO 14
$ej14_1 = 10; 
$ej14_2 = 5; 
$suma = $ej14_1 + $ej14_2;
$resta = $ej14_1 - $ej14_2;
$multi = $ej14_1 * $ej14_2;
$division = $ej14_1 / $ej14_2;

echo "VALORES: $ej14_1 y $ej14_2: <br> Suma: $suma <br> Resta: $resta <br> Multiplicación: $multi <br> División: $division<hr>"


?>


<?php

//EJERCICIO 15
$nombreEquipo = "Real Betis"; 
$nombreJugador = "Lo Celso";

echo "<p>El jugador $nombreJugador juega en el $nombreEquipo</p><hr>"


?>


<?php
//EJERCICIO 16

$ej16 = "Buenas"; 
echo "Hola, " . $ej16 . ". ¿Cómo estás?<hr>"; 
?>
<?php
//EJERCICIO 1 - Cálculo de área y perímetro de un rectángulo

$Alto = 5;
$Ancho = 3;

$Area = $Alto*$Ancho;
$Perimetro = $Alto*2+ $Ancho*2;

echo"<p>Dada una altura de $Alto metros y $Ancho metro de ancho, el área es de: $Area metros y el perímetro de $Perimetro metros.</p>"
?>

<hr>

<?php
//EJERCICIO 2 - Calcular el resto y cociente de dos números

$num1=8;
$num2=4;

$cociente = $num1/$num2;
$resto = $num1%$num2;

echo"<p>Dado el numero $num1 y el $num2 : El cociente es $cociente y el resto $resto</p>"
?>

<hr>

<?php
//EJERCICIO 3 - Pre-incremento y post-incremento

$ej3 = 2;

echo "<p>Tenemos el numero $ej3, el cual podemos pre-incrementar ".++$ej3." o post-incrementar ".$ej3++."</p>"
?>

<hr>

<?php
//EJERCICIO 4 - Redondeo de un número

$ej4 = 4.6675;
echo "<p>El numero inicial es: $ej4, redondeado es: ".round($ej4,2)."</p>"

?>

<hr>

<?php
//EJERCICIO 5 - Calcular potencias

$potencia = 3**4;
echo "<p>El resultado de la potencia 3 elevado a 4 es $potencia </p>"
?>

<hr>

<?php
//EJERCICIO 6 - Número aleatorio

echo"<p>Voy a generar un numero aleatorio entre el 1 y el 50: ".mt_rand(1,50). "</p>"
?>

<hr>

<?php
//EJERCICIO 7 - Conversión de tipos con operadores de comparación

$ej7 = 7;
$ej7_2 = 7;

$ej7_texto = "Buenas noches";

$ej7_2==$ej7_texto;
$ej7===$ej7_texto;

echo "<p>el entero con con === es $ej7 y el que ha usado == es $ej7_2</p>"
?>

<hr>

<?php
//EJERCICIO 8 - Formatear un número con separador de miles y decimales

$numero = 5;
$texto = "5";


echo "Comparacion con ==: ".var_dump($numero == $texto)."</p>"; 
echo "Comparacion con ===: ".var_dump($numero === $texto)."</p>"; 
?>


<hr>

<?php
//EJERCICIO 9 - Evaluar expresiones con operadores lógicos

$ej9 = 14;
if ($ej9 <= 20 && $ej9 >= 10){
    echo "$ej9 esta entre el 10 y el 20";
}
else {
    echo "$ej9 no esta entre el 10 y el 20";
}

?>

<hr>

<?php
//EJERCICIO 10 - Incremento de caracteres

$ej10 = 5;
echo"<p>Si tengo el número $ej10 , puedo incrementarlo con un ++ : ".++$ej10."</p>"
?>




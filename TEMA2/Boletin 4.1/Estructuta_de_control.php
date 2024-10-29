<h2>Ejercicio 1 </h2>
<?php 

/*Ejercicio 1
Hacer un código con bucles anidados de variables independientes, donde la variable del bucle
exterior ($i) tome valores numéricos entre 1 y 3, y la del bucle interior ($j) valores entre a y d.
Los resultados se deben ver de la siguiente forma:
 */

for ($i=1; $i<=3; $i++) {
    echo"Jornada $i <br>";
    for ($j= "a"; $j<= "d"; $j++) {
        echo "&emsp; Equipo $j<br>";
    }
}
?>

<br><br><hr>
<h2>Ejercicio 2 </h2>
<?php 

/*Ejercicio 2
Hacer un código con bucles anidados de variables dependientes que simule lo siguiente:
- Tienes 2 dados
- Tiras el primero.
- Tiras el segundo tantas veces como el valor obtenido del dado 1.
- Vuelves a tirar el primer dado y repetimos la operación.
- El primer dado, lo tiramos 3 veces.
Mostrar los datos de la siguiente manera:
 */

for ($i=1; $i<=3; $i++) {
    echo"Tiramos el dado por $i vez <br>";
    $num_ale =rand(1,6);
    echo"<p> Ha salido el numero: $num_ale<br>Ahora vamos a tirar el segundo dado las mismas veces:</p>";
    for ($j= 1; $j<= $num_ale; $j++) {
        echo"<p>&emsp; Ha salido el numero:" .rand(1,6)."</p>";}
}
?>


<br><br><hr>
<h2>Ejercicio 3 </h2>
<?php 

/*Ejercicio 3
Crear un código para calcular el factorial de un número, usando la función FOR*/

$numero = 7;
$suma=0;
for ($i=$numero; $i>0; $i--) {
    $suma = $suma+$i;
}
echo"El factorial de $numero es: $suma"
?>
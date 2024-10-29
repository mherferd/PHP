<h2>Ejercicio 1 </h2>
<?php 

/*Ejercicio 1
Crear una función en PHP que reciba como parámetros la altura (h) de un
cilindro y el radio de la base (r), y que nos devuelva el volumen del cilindro.
La fórmula del volumen es: V=л2 * r2 *h 
 */

$altura = 5;
$radio = 3;

volumen_cilindro($radio, $altura);

function volumen_cilindro ($altura,$radio){

   return (pi()**2)*($radio*$radio)*$altura;
}

echo"<p>El volumen de un cilindro de altura $altura y radio $radio es de:</p>";
echo round(volumen_cilindro($radio, $altura),2);
?>

<br><br><hr>
<h2>Ejercicio 2 </h2>
<?php 

/*Ejercicio 2
Crea 2 funciones PHP que, dado 3 números, una función los sume y la otra
haga el producto de los 3 números.
 */

$num1 = 10;
$num2 = 7;

function sumar($num1,$num2){
    return $num1+$num2;
}

function restar($num1,$num2){
    return $num1-$num2;
}

echo "<p> La suma de $num1 y $num2 es: </p>";
echo sumar($num1,$num2);
echo "<br>";
echo "<p> La resta de $num1 y $num2 es: </p>";
echo restar($num1,$num2);

?>


<br><br><hr>
<h2>Ejercicio 3 </h2>
<?php 

/*Ejercicio3 - Función Eliminar Número
Crea una función con la sintaxis moderna que
● Reciba un array de números.
● Un número de elementos a eliminar de dicho array, por defecto uno.
● Se elimina del array el número de elementos recibidos de forma
aleatoria dentro del array.
● Devuelve un booleano indicando si la acción se realizó correctamente
o no*/

$numeros = [4,3,8,7,6,5,1,2,7,9,4,2];
$n_eliminados = 3;
function eliminar_numeros(int $nums, array $array){
    for ($i= 0; $i<$nums; $i++){
        $eliminado = rand(0,count($array));
        $boolean = array_splice($array,$eliminado,-1);
    }
    return $boolean;
}
echo "<p>La operación se ha realizado correctamente: " .eliminar_numeros($n_eliminados,$numeros)."</p>";


?>
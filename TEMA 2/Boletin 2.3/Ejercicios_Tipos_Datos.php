<?php 
echo "<h1>Ejercicios Tipos de Datos con Matrices</h1><hr>";

/*1. Ejercicio: Crea una matriz que contenga los nombres de cinco colores y luego
imprime el tercer color en la matriz.
○ Objetivo: Familiarizarse con la creación y acceso a los elementos de una
Matrices asociativas*/

$Colores = ["Rojo","Negro","Verde","Naranja","Azul"];
echo "<p>El tercer color del array es: $Colores[2]</p><hr>"

?>

<?php 
/*2. Ejercicio: Crea una matriz asociativa para almacenar información de un coche
(marca, modelo, año) y luego imprime el valor del modelo.*/

$Coche = ["Marca" => "Nissan", "Modelo" => "Micra", "Anio" => "2007"];
echo "<p>El modelo de mi choche es: $Coche[Modelo]</p><hr>"

?>

<?php 
/*3. Ejercicio: Crea una matriz multidimensional que contenga información de tres
estudiantes (nombre, edad, nota). Imprime el nombre del segundo estudiante.
○ Objetivo: Practicar la creación y acceso a matrices multidimensionales.*/

$Alumnos = [["Nombre" => "Jose", "Edad" => "19", "Nota" => "8"],
            ["Nombre" => "Alejandro", "Edad" => "18", "Nota" => "5"],
            ["Nombre" => "Mario", "Edad" => "19", "Nota" => "7"]
        ];
echo "<p>El nombre del estudiante 2 es: {$Alumnos[1]["Nombre"]}</p><hr>"


?>

<?php 
/*4. Ejercicio: Crea una matriz con los días de la semana y usa la función print_r()
para imprimirla.
○ Objetivo: Usar la función print_r() para visualizar matrices completas*/

$Semana = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo",];
print_r(value: $Semana);
echo"<hr>";


?>

<?php 
/*5. Ejercicio: Crea una matriz con tres números y añade dos números más a la matriz.
○ Objetivo: Añadir elementos a una matriz existente.*/

$Numeros = [8,4,28];
$Numeros[] = 17;
$Numeros[] = 10;
print_r(value: $Numeros);
echo"<hr>"

?>

<?php 
/*6. Ejercicio: Crea dos matrices, una con los nombres de tres frutas y otra con tres
verduras. Únelas en una sola matriz.
○ Objetivo: Unir matrices usando array_merge()*/

$Frutas =  ["Manzana","Granada","Mango"];
$Verduras = ["Tomate","Zanahoria","Patata"];
$Juntas = array_merge($Frutas, $Verduras);
print_r(value: $Juntas);
echo"<hr>"


?>

<?php 
/*7. Ejercicio: Crea una matriz con tres valores, utiliza count() para mostrar cuántos
elementos tiene.
○ Objetivo: Contar elementos en una matriz*/

$Frutas =  ["Manzana","Granada","Mango"];
echo "<p>Numero de elementos en la matriz Frutas: " .count($Frutas)."</p>";

echo"<hr>"

?>

<?php 
/*8. Ejercicio: Crea una matriz con cinco números y elimina el tercer número usando
unset().
○ Objetivo: Eliminar elementos de una matriz.*/

$Numeros = [8,4,28,17,10];
print_r(value: $Numeros);
echo"<p>Así queda el array si eliminamos el tercer numero: </p>";
unset($Numeros[2]);
print_r(value: $Numeros);
echo"<hr>";

?>

<?php 
/*9. Ejercicio: Crea una matriz y luego copia sus valores a otra variable.
○ Objetivo: Copiar matrices en PHP.*/

$Matriz_A_Copiar = [8,4,28,17,10];
$Matriz_Copiada = $Matriz_A_Copiar;

echo"<p>Matriz: </p>";
print_r($Matriz_A_Copiar);
echo"<p>Matriz copiada: </p>";
print_r($Matriz_Copiada);
echo"<hr>"


?>

<?php 
/*10. Ejercicio: Define una constante con el valor de la velocidad de la luz en metros por
segundo y úsala para mostrarla en pantalla.
○ Objetivo: Definir y usar una constante*/

define("Velocidad_Luz",299792458);
echo "<p>La luz viaja a : ".Velocidad_Luz." metros por segundo</p><hr>";

?>

<?php 
/*11. Ejercicio: Crea una constante para el nombre de una aplicación web y muestra su
valor en un mensaje.
○ Objetivo: Practicar la definición y uso de constantes.*/

define("Nombre_Web","RealBetisWEB");
echo "<p>La página web del Real Betis se llama: " .Nombre_Web."</p><hr>";


?>

<?php 
/*12. Ejercicio: Usa la constante predefinida PHP_VERSION para mostrar la versión actual
de PHP en la que se está ejecutando el script.
○ Objetivo: Usar constantes predefinidas de PHP.*/

echo "La versión actual de PHP en la que estoy trabajando es: ".PHP_VERSION."</p><hr>"

?>

<?php 
/*13. Ejercicio: Crea un script que use get_defined_constants() para mostrar todas
las constantes predefinidas disponibles en tu entorno PHP.
○ Objetivo: Explorar todas las constantes predefinidas en PHP*/

$Constantes = get_defined_constants();
print_r($Constantes);

?>


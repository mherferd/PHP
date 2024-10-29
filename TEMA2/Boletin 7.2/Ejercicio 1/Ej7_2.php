<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor'];

    //Verificamos si está entre 2 y 10
        if ($valor<=10 && $valor>=2) {
            echo "<p>Numero de elementos: '$valor'</p>";
            echo "<label for='valor2'>Introduce los elementos a tratar:</label><br><br>";

            echo "<form action='Ej2.2_2.php' method='post'>";
            //Creamos un bucle for para crear tantos inputs según el número de elementos introducidos
            for ($i=0; $i<$valor; $i++) {
            echo "<input type='text' id='celda$i' name='celda$i' size=3 required>";
            }

            //Una vez creados los inputs, mostramos el botón de validar y borrar
            echo "<br><br>";
            echo "<button type='submit' value='Enviar'>Enviar</button>";
            echo "<button type='reset' value='Borrar'>Borrar</button><br><br>";
            echo"<a href=Ej7.2.html>Volver al inicio</a>";
            echo "</form>";

        }
        else{
            echo "<p>Error, el valor '$valor' no está en el rango de 2 a 10.</p>";
            echo"<a href=Ej7.2.html>Volver al inicio</a>";
        }
    }

?>
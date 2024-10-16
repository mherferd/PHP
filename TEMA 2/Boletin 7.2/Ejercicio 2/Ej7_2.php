<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor'];

    // Verificamos si está entre 2 y 10
    if ($valor <= 10 && $valor >= 2) {
        echo "<p>Numero de elementos: '$valor' x '$valor'</p>";
        echo "<label for='valor2'>Introduce los elementos a tratar:</label><br><br>";

        echo "<form action='Ej2.2_2.php' method='post'>";

        // Campo oculto que envía el valor de la matriz
        echo "<input type='hidden' name='valor' value='$valor'>";


        // Creamos un bucle for para crear tantos inputs según el número de elementos introducidos
        for ($i = 0; $i < $valor; $i++) {
            echo "<br>";
            for ($j = 0; $j < $valor; $j++) {
                echo "<input type='text' id='celda{$i}_{$j}' name='celda{$i}_{$j}' size='3' required>";
            }
        }


        // Creamos los inputs para seleccionar la fila y columna y la dirección
        echo "<br><br>";
        echo "<label for='fila'>Selecciona una fila:</label>";
        echo "<select id='fila' name='fila'>";
        for ($i = 1; $i <= $valor; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        echo "</select><br><br>";

        echo "<label for='columna'>Selecciona una columna:</label>";
        echo "<select id='columna' name='columna'>";
        for ($i = 1; $i <= $valor; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        echo "</select><br><br>";

        echo "<label for='direccion'>Introduzca una trayectoria:</label>";
        echo "<select id='direccion' name='direccion'>";
        echo "<option value='AR'>Arriba</option>";
        echo "<option value='AB'>Abajo</option>";
        echo "<option value='DE'>Derecha</option>";
        echo "<option value='IZ'>Izquierda</option>";
        echo "<option value='ARDE'>Arriba-Derecha</option>";
        echo "<option value='ARIZ'>Arriba-Izquierda</option>";
        echo "<option value='ABDE'>Abajo-Derecha</option>";
        echo "<option value='ABIZ'>Abajo-Izquierda</option>";
        echo "</select>";

        // Botones de enviar y borrar
        echo "<br><br>";
        echo "<button type='submit' value='Enviar'>Enviar</button>";
        echo "<button type='reset' value='Borrar'>Borrar</button><br><br>";
        echo "<a href='Ej7.2.html'>Volver al inicio</a>";
        echo "</form>";

    } else {   
        echo "<p>Error, el valor '$valor' no está en el rango de 2 a 10.</p>";
        echo "<a href='Ej7.2.html'>Volver al inicio</a>";
    }
}
?>

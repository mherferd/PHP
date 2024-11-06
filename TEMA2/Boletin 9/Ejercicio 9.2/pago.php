<?php
session_start();

    //Recogemos los datos del formulario enviado anteriormente
    $pelicula_id = $_POST['pelicula_id'];
    $horario = $_POST['horario'];
    $titulo = $_POST['titulo'];
    $asientos = isset($_POST['asientos']) ? $_POST['asientos'] : [];
    $precio = 10;
    $total = 0;

    //Imprimo los datos
    echo "<h1>Resumen de la compra</h1>";
    echo "<h3>Película: $titulo</h3>";
    echo "<h3>Horario: $horario</h3>";

    //Comprobamos si se han enviado correctamente los asientos para imprimir
    if (isset($_POST['asientos']) && count($asientos) > 0) {
        echo "<h3>Asientos seleccionados:</h3>";
        echo "<ul>";

        //Para mostrar los asientos hacemos un bucle que recorra el array de asientos
        foreach ($asientos as $asiento) {
            echo "<li>Asiento: $asiento --- $precio €</li>";
            $total += $precio;
        }
        echo "</ul>";
        echo "<h3>TOTAL: $total €</h3>";

        //Creamos formulario para enviar los datos finales al creador de txt 
        echo "<form action='descargar.php' method='POST'>"; 

        echo "<input type='hidden' name='pelicula_id' value='$pelicula_id'>";
        echo "<input type='hidden' name='titulo' value='$titulo'>";
        echo "<input type='hidden' name='horario' value='$horario'>";
        echo "<input type='hidden' name='total' value='$total'>";

        foreach ($asientos as $asiento) {
            echo '<input type="hidden" name="asientos[]" value="' . $asiento . '">';
        }

        echo "<button type='submit'>PAGAR</button>";
        echo "</form>";
    } else {
        echo "<h3>No se han seleccionado asientos.</h3>";
    }
?>

<?php
session_start();

    //Declaramos la informacion de las peliculas
    $peliculas = [
        1 => ['titulo' => 'El lobo de Wall Street', 'horarios' => ['14:00', '17:00', '20:00']],
        2 => ['titulo' => 'Interestelar', 'horarios' => ['14:00', '18:00', '21:00']],
        3 => ['titulo' => 'Terrifier 3', 'horarios' => ['16:00', '19:00', '22:00']],
    ];

    //Comprobamos si se ha seleccionado película anteriormente
    if (isset($_POST['pelicula_id'])) {
        $pelicula_id = $_POST['pelicula_id'];
        $_SESSION['pelicula_id'] = $pelicula_id; 
        $pelicula = $peliculas[$pelicula_id];
    } else {
        echo "No se ha seleccionado ninguna película.";
        exit;
    }

    //Creamos formulario para elegir la hora
    echo "<h2>Horarios Disponibles para " . $pelicula['titulo'] . "</h2>";

        echo "<form action='seleccion_asientos.php' method='POST'>"; 
                foreach ($pelicula['horarios'] as $horario): 
                    echo "<input type='radio' name='horario' value='$horario'>$horario</button><br>";
                endforeach;
                echo "<br><br>";
                echo "<button type='submit'>ENVIAR</button>";
            echo "<input type='hidden' name='pelicula_id' value='$pelicula_id'>"; 
        echo "</form>";
?>

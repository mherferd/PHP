<?php
session_start();
    
    //Declaramos la informacion de las peliculas
    $peliculas = [
        1 => ['titulo' => 'El lobo de Wall Street', 'horarios' => ['14:00', '17:00', '20:00']],
        2 => ['titulo' => 'Interestelar', 'horarios' => ['14:00', '18:00', '21:00']],
        3 => ['titulo' => 'Terrifier 3', 'horarios' => ['16:00', '19:00', '22:00']],
    ];

    //Comprobamos si se ha hora y película anteriormente
    if (isset($_POST['pelicula_id']) && isset($_POST['horario'])) {
        $pelicula_id = $_POST['pelicula_id'];
        $horario = $_POST['horario'];
        $pelicula = $peliculas[$pelicula_id];

        //Creamos el temporizador para la sesión
        if (!isset($_SESSION['hora_inicio'])) {
            $_SESSION['hora_inicio'] = time(); 
        }
        $tiempo_transcurrido = time() - $_SESSION['hora_inicio'];
        if ($tiempo_transcurrido > 60) {
            session_unset(); 
            session_destroy(); 
            echo "<h2>El tiempo para seleccionar asientos ha expirado. Vuelva a intentar.</h2>";
            exit;
        }


    //Creamos formulario para enviar los asientos y los datos anteriores a pago.php
    $titulo = $pelicula['titulo'];
    echo "<h2>Selecciona Asiento: <br><br>" . $titulo . " a las " . $horario . "</h2>";

    echo "<form action='pago.php' method='POST'>"; 
        for($i = 0; $i < 5; $i++) {  
            for($j = 0; $j < 6; $j++) {  
                echo "<input type='checkbox' name='asientos[]' value='$i+$j'>";
                echo "$i-$j ";
            }
            echo "<br>";
        }
        echo "<br><br><br>";
        echo "<button type='submit'>ENVIAR</button>";
        echo "<input type='hidden' name='pelicula_id' value='$pelicula_id'>"; 
        echo "<input type='hidden' name='titulo' value='$titulo'>"; 
        echo "<input type='hidden' name='horario' value='$horario'>"; 

    echo "</form>";

} else {
    echo "No se ha seleccionado ninguna película o horario.";
    exit;
}
?>

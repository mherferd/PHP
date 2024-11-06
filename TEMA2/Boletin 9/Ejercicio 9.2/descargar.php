<?php
session_start();

    //Comprobamos que los datos han llegado correctamente
    if (isset($_POST['pelicula_id'], $_POST['horario'], $_POST['titulo'], $_POST['asientos'], $_POST['total'])) {

        $pelicula_id = $_POST['pelicula_id'];
        $horario = $_POST['horario'];
        $titulo = $_POST['titulo'];
        $asientos = $_POST['asientos']; 
        $total = $_POST['total'];  

        //Introduzco los datos del documento .txt
        $contenido = "Resumen de la compra:\n";
        $contenido .= "Película: $titulo\n";
        $contenido .= "Horario: $horario\n";
        $contenido .= "Asientos seleccionados:\n";

        foreach ($asientos as $asiento) {
            $contenido .= "Asiento: $asiento --- 10 €\n";
        }

        $contenido .= "TOTAL: $total €\n";

        //Creamos el documento .txt
        $filename = "compra.txt";
        $file = fopen($filename, 'w');  

        fwrite($file, $contenido);

        fclose($file);

        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Length: ' . filesize($filename));

        readfile($filename);

        unlink($filename);
    } else {
        echo "No se han recibido los datos de la compra.";
    }
?>

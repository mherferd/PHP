<?php
ob_start();

//Condiciones según el tipo de archivo seleccionado previamente

if ($_REQUEST['archivo'] == "PNG") {
    header("Content-type: image/png");
    header("Content-Disposition: attachment; filename=imagen.png");
    //Lee el contenido del archivo .png
    readfile("imagen.png");
    exit; 

} elseif ($_REQUEST['archivo'] == "JPEG") {
    header("Content-type: image/jpeg");
    header("Content-Disposition: attachment; filename=imagen.jpeg");
    //Lee el contenido del archivo .jpeg
    readfile("imagen.jpeg");
    exit;

} elseif ($_REQUEST['archivo'] == "GIF") {
    header("Content-type: image/gif");
    header("Content-Disposition: attachment; filename=imagen.gif");    
    //Lee el contenido del archivo .gif
    readfile("imagen.gif");
    exit; 
}

ob_end_flush(); 
?>

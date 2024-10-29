<?php
ob_start(); // Start output buffering

if ($_REQUEST['archivo'] == "PNG") {
    header("Content-type: image/png");
    header("Content-Disposition: attachment; filename=imagen.png");
    readfile("imagen.png");
    exit; // Terminate the script after sending the file

} elseif ($_REQUEST['archivo'] == "JPEG") {
    header("Content-type: image/jpeg");
    header("Content-Disposition: attachment; filename=imagen.jpeg");
    readfile("imagen.jpeg");
    exit; // Terminate the script after sending the file

} elseif ($_REQUEST['archivo'] == "GIF") {
    header("Content-type: image/gif");
    header("Content-Disposition: attachment; filename=imagen.gif");
    readfile("imagen.gif");
    exit; // Terminate the script after sending the file
}

ob_end_flush(); // Flush the output buffer
?>

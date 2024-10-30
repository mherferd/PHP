<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpZip\ZipFile;


// Crear una instancia de ZipFile
$zipFile = new ZipFile();
    
$zipFile->addFile('archivo1.txt', 'archivo1.txt');
$zipFile->addFile('archivo2.txt', 'archivo2.txt');
    
// Guardar el archivo ZIP en el servidor
$zipFile->saveAsFile('archivo.zip')->close();
    
// Establecer cabeceras para la descarga
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="archivo.zip"');
header('Content-Length: ' . filesize('archivo.zip'));
    
// Enviar el archivo ZIP al navegador
readfile('archivo.zip');
    

?>

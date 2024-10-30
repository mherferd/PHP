<?php
header('Content-Type: text/plain');

header('Content-Disposition: attachment; filename="boletin8_1.txt"');

//Lee el contenido del archivo de texto
readfile("boletin8_1.txt");
?>
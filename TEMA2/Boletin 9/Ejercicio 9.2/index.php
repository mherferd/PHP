<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cine</title>
</head>
<body>
    <h1>Qué película quiere ver?</h1>

    <!--Formulario para enviar la película que queremos ver-->
    <form action="seleccion_pelicula.php" method="POST">
        <input type="radio" name="pelicula_id" value="1">El lobo de Wall Street</input><br>
        <input type="radio" name="pelicula_id" value="2">Interestelar</input><br>
        <input type="radio" name="pelicula_id" value="3">Terrifier 3</input><br><br><br>
        <button type="submit">HORARIOS</button>
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);

    $errores = [];

    // Validamos que el nombre no esté vacío
    if (empty($nombre)) {
        $errores[] = "El campo 'Nombre' es obligatorio.";
    }

    // Validamos que el email no esté vacío y tenga un formato válido
    if (empty($email)) {
        $errores[] = "El campo 'Email' es obligatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del 'Email' no es válido.";
    }

    // Si hay errores, los mostramos; de lo contrario, mostramos los datos recibidos
    if (count($errores) > 0) {
        // Mostrar errores
        echo "<h3>Se encontraron los siguientes errores:</h3>";
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
    } else {
        
        echo "<h3>Datos recibidos:</h3>";
        echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
    }
}
?>
